<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use fa\model\repository\contract\IEmployeeRepositoryInterface;

class EmployeeController extends FABaseController
{
    public function __construct(IEmployeeRepositoryInterface $entity)
    {
        static::addRestMapping('employees','Employee');
        parent::__construct($entity);
    }
}
