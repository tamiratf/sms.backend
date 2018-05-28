<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use fa\model\repository\contract\IPermissionRoleRepositoryInterface;

class PermissionRoleController extends FABaseController
{
    public function __construct(IPermissionRoleRepositoryInterface $entity)
    {
        static::addRestMapping('permissionroles','PermissionRole');
        parent::__construct($entity);
    }
}
