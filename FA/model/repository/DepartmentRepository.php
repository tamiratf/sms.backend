<?php
/**
 * Created by PhpStorm.
 * User: tamirat
 * Date: 5/26/17
 * Time: 8:54 PM
 */

namespace fa\model\repository;

use fa\model\Department;
use fa\model\repository\contract\IDepartmentRepositoryInterface;
class DepartmentRepository extends FABaseRepository implements IDepartmentRepositoryInterface {

    public function __construct(Department $entity)
    {
        parent::__constructor($entity);
    }
}