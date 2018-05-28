<?php
/**
 * Created by PhpStorm.
 * User: tamirat
 * Date: 5/26/17
 * Time: 8:54 PM
 */

namespace fa\model\repository;

use fa\model\Address;
use fa\model\repository\contract\IAddressRepositoryInterface;
class AddressRepository extends FABaseRepository implements IAddressRepositoryInterface {

    public function __construct(Address $entity)
    {
        parent::__constructor($entity);
    }
}