<?php
/**
 * Created by PhpStorm.
 * User: tamirat
 * Date: 5/26/17
 * Time: 8:54 PM
 */

namespace fa\model\repository;

use fa\model\PermissionRole;
use fa\model\repository\contract\IPermissionRoleRepositoryInterface;

class PermissionRoleRepository extends FABaseRepository implements IPermissionRoleRepositoryInterface {

    public function __construct(PermissionRole $entity)
    {
        parent::__constructor($entity);
    }
}