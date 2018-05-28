<?php
/**
 * Created by PhpStorm.
 * User: tamirat
 * Date: 5/26/17
 * Time: 8:54 PM
 */

namespace fa\model\repository;

use fa\model\Company;
use fa\model\repository\contract\ICompanyRepositoryInterface;
class CompanyRepository extends FABaseRepository implements ICompanyRepositoryInterface {

    public function __construct(Company $entity)
    {
        parent::__constructor($entity);
    }
}