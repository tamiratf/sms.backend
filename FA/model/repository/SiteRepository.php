<?php
/**
 * Created by PhpStorm.
 * User: tamirat
 * Date: 5/26/17
 * Time: 8:54 PM
 */

namespace fa\model\repository;

use fa\model\Site;
use fa\model\repository\contract\ISiteRepositoryInterface;
class SiteRepository extends FABaseRepository implements ISiteRepositoryInterface {

    public function __construct(Site $entity)
    {
        parent::__constructor($entity);
    }
}