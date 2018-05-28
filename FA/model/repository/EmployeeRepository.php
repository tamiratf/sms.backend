<?php
/**
 * Created by PhpStorm.
 * User: tamirat
 * Date: 5/26/17
 * Time: 8:54 PM
 */

namespace fa\model\repository;

use fa\model\Employee;
use fa\model\repository\contract\IEmployeeRepositoryInterface;
class EmployeeRepository extends FABaseRepository implements IEmployeeRepositoryInterface {

    public function __construct(Employee $entity)
    {
        parent::__constructor($entity);
    }
}