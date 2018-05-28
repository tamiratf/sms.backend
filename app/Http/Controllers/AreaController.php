<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use fa\model\repository\contract\IAreaRepositoryInterface;

class AreaController extends FABaseController
{
    public function __construct(IAreaRepositoryInterface $entity)
    {
        static::addRestMapping('areas','Area');
        parent::__construct($entity);
    }
}
