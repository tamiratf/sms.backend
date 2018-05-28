<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use fa\model\repository\contract\IPermissionRepositoryInterface;

class PermissionController extends FABaseController
{
    public function __construct(IPermissionRepositoryInterface $entity)
    {
        static::addRestMapping('permissions','Permission');
        parent::__construct($entity);
    }
}
