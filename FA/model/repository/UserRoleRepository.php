<?php
/**
 * Created by PhpStorm.
 * User: tamirat
 * Date: 5/26/17
 * Time: 8:54 PM
 */

namespace fa\model\repository;

use fa\model\UserRole;
use fa\model\repository\contract\IUserRoleRepositoryInterface;

class UserRoleRepository extends FABaseRepository implements IUserRoleRepositoryInterface {

    public function __construct(UserRole $entity)
    {
        parent::__constructor($entity);
    }
}