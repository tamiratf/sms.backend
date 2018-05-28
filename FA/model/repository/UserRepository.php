<?php
/**
 * Created by PhpStorm.
 * User: tamirat
 * Date: 5/26/17
 * Time: 8:54 PM
 */

namespace fa\model\repository;

use fa\model\User;
use fa\model\repository\contract\IUserRepositoryInterface;
class UserRepository extends FABaseRepository implements IUserRepositoryInterface {

    public function __construct(User $entity)
    {
        parent::__constructor($entity);
    }
}