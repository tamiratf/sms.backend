<?php
/**
 * Created by PhpStorm.
 * User: tamirat
 * Date: 5/26/17
 * Time: 8:54 PM
 */

namespace fa\model\repository;

use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Mockery\CountValidator\Exception;
use Fh\QueryBuilder\QueryBuilder;

use fa\model\Area;
use fa\model\repository\contract\IAreaRepositoryInterface;
class AreaRepository extends FABaseRepository implements IAreaRepositoryInterface {

    public function __construct(Area $entity)
    {
        parent::__constructor($entity);
    }

    public function all($request, QueryBuilder $qb)
    {        
        $root = Area::whereNull('parent_id')->first();
        $data = array_values($root->getDescendantsAndSelf()->toHierarchy()->toArray());
        return Response::json(
            [
                'success'=>true,
                'count' => 1,
                'message'=>"Query Successfully Returned!",
                "data" => $data
            ],200,[],JSON_PRETTY_PRINT);
    }

    public function find($id)
    {
        try
        {
            $root = Area::where('id', $id)->first();

            return Response::json(
                [
                    'success'=>true,
                    'count' => 1,
                    'message'=>"Query Successfully Returned!",
                    "data" => $root->getDescendantsAndSelf()->toHierarchy()->toArray()
                ],200,[],JSON_PRETTY_PRINT);

        }
        catch(QueryException $ex)
        {
            return $this->response($ex->getMessage(), [], -1, false);
        }
    }


    public function store($input)
    {
        try{
            $validator = Validator::make($input,$this->entity->validationRules);
            if($validator->fails())
            {
                $errors = $validator->errors();
                return $this->response("Validation Failed.", [], -1, false, $errors);
            }

            // if the following clause passes, we are saving a child node
            if(isset($input['parent_id']) && $input['parent_id'] > 0)
            {
                $parentId = $input['parent_id'];
                $root = Area::where('id', $parentId)->first();

                $areaName = $input['AreaName'];
                $areaType = $input['AreaType'];

                $result = $root->children()->create(['AreaName' => $areaName, 'AreaType' => $areaType]);                
            }
            else
            {
                $result = $this->entity->create($input);
            }

            //$result = $this->entity->create($input);
            return $this->response("Entity Successfully Created!", $result,1, true);
        }catch(QueryException $ex)
        {
            return $this->response($ex->getMessage(), [], -1, false);
        }
    }
}