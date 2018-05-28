<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use fa\model\repository\contract\IUserRepositoryInterface;

class UserController extends FABaseController
{
    public function __construct(IUserRepositoryInterface $entity)
    {
        static::addRestMapping('users','User');
        parent::__construct($entity);
    }
}
