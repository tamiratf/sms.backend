<?php
/**
 * Created by PhpStorm.
 * User: tamirat
 * Date: 5/26/17
 * Time: 10:12 PM
 */

namespace fa\model\repository\contract;


use Fh\QueryBuilder\QueryBuilder;

interface IFABaseRepositoryInterface {

    public function all($request, QueryBuilder $builder);
    public function find($id);
    public function store($input);
    public function edit($input, $id);
    public function delete($id);
}