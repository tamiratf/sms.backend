<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use fa\model\repository\contract\IDepartmentRepositoryInterface;

class DepartmentController extends FABaseController
{
    public function __construct(IDepartmentRepositoryInterface $entity)
    {
        static::addRestMapping('departments','Department');
        parent::__construct($entity);
    }
}
