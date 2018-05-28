<?php
/**
 * Created by PhpStorm.
 * User: tamirat
 * Date: 5/26/17
 * Time: 10:11 PM
 */

namespace fa\model\repository;


use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use fa\model\repository\contract\IFABaseRepositoryInterface;
use Mockery\CountValidator\Exception;
use Fh\QueryBuilder\QueryBuilder;

class FABaseRepository implements IFABaseRepositoryInterface{

    protected $entity;
    protected $builder;

    public function __constructor($entity)
    {
        $this->entity = $entity;
    }

    public function all($request, QueryBuilder $qb)
    {
        try
        {
            $qb->buildForCount();

            $iTotalRecordCount = $qb->getCount();

            $qb = $qb->remake();

            $qb->build();

            $collection = $qb->paginate();

            return $this->response("Query Successfully Returned!", $collection, $iTotalRecordCount, true);

        }catch(\Exception $ex)
        {
            return $this->response($ex->getMessage(), [], -1, false);
        }
    }

    public function find($id)
    {
        try
        {
            $result = $this->entity->find($id);
            if(is_null($result))
            {
                return $this->response("No Record found!!!", $result,0, true);
            }
            return $this->response("Entity Successfully Returned!", $result,1, true);
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
            $result = $this->entity->create($input);
            return $this->response("Entity Successfully Created!", $result,1, true);
        }catch(QueryException $ex)
        {
            return $this->response($ex->getMessage(), [], -1, false);
        }
    }

    public function edit($input, $id)
    {
        try{
            $result = $this->entity->find($id)->update($input);            
            return $this->response("Entity Successfully Updated!", null,1, true);
        }catch(QueryException $ex)
        {
            return $this->response($ex->getMessage(), [], -1, false);
        }
    }

    public function delete($id)
    {
        try{
            $this->entity->destroy($id);
            return $this->response("Entity Successfully Deleted!", null,1, true);
        }catch(QueryException $ex)
        {
            return $this->response($ex->getMessage(), [], -1, false);
        }
    }

    public function response($message, $data, $count, $isSuccessful, $errorBag = [])
    {
        if($isSuccessful)
        {
            return Response::json(
                [
                    'success'=>true,
                    'count' => $count,
                    'message'=>$message,
                    "data" => is_null($data) ? "" : $data->toArray()
                ],200,[],JSON_PRETTY_PRINT);
        }
        else
        {
            return Response::json(
                [
                    'success'=>false,
                    'message'=>$message,
                    'error' => $errorBag
                ],500,[],JSON_PRETTY_PRINT);
        }

    }

}