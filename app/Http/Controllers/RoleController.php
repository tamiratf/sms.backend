<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use fa\model\repository\contract\IRoleRepositoryInterface;

class RoleController extends FABaseController
{
    public function __construct(IRoleRepositoryInterface $entity)
    {
        static::addRestMapping('roles','Role');
        parent::__construct($entity);
    }
}
