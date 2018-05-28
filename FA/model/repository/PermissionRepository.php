<?php
/**
 * Created by PhpStorm.
 * User: tamirat
 * Date: 5/26/17
 * Time: 8:54 PM
 */

namespace fa\model\repository;

use fa\model\Permission;
use fa\model\repository\contract\IPermissionRepositoryInterface;

class PermissionRepository extends FABaseRepository implements IPermissionRepositoryInterface {

    public function __construct(Permission $entity)
    {
        parent::__constructor($entity);
    }
}