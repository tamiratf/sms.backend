<?php
/**
 * Created by PhpStorm.
 * User: tamirat
 * Date: 5/26/17
 * Time: 8:54 PM
 */

namespace fa\model\repository;

use fa\model\Role;
use fa\model\repository\contract\IRoleRepositoryInterface;

class RoleRepository extends FABaseRepository implements IRoleRepositoryInterface {

    public function __construct(Role $entity)
    {
        parent::__constructor($entity);
    }
}