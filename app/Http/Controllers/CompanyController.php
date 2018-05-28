<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use fa\model\repository\contract\ICompanyRepositoryInterface;

class CompanyController extends FABaseController
{
    public function __construct(ICompanyRepositoryInterface $entity)
    {
        static::addRestMapping('companies','Company');
        parent::__construct($entity);
    }
}
