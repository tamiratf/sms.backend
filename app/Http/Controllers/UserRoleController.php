<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use fa\model\repository\contract\IUserRoleRepositoryInterface;

class UserRoleController extends FABaseController
{
    public function __construct(IUserRoleRepositoryInterface $entity)
    {
        static::addRestMapping('userroles','UserRole');
        parent::__construct($entity);
    }
}
