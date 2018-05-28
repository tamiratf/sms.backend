<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use fa\model\repository\contract\IAddressRepositoryInterface;

class AddressController extends FABaseController
{
    public function __construct(IAddressRepositoryInterface $entity)
    {
        static::addRestMapping('addresses','Address');
        parent::__construct($entity);
    }
}
