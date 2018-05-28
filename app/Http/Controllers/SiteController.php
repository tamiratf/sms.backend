<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use fa\model\repository\contract\ISiteRepositoryInterface;

class SiteController extends FABaseController
{
    public function __construct(ISiteRepositoryInterface $entity)
    {
        static::addRestMapping('sites','Site');
        parent::__construct($entity);
    }
}
