<?php

namespace fa\model;

use Baum\Node;

class Area extends Node {

  protected $table = 'areas';

  protected $parentColumn = 'parent_id';

  protected $leftColumn = 'lft';

  protected $rightColumn = 'rgt';

  protected $depthColumn = 'depth';

  protected $orderColumn = null;

  protected $guarded = array('id', 'lft', 'rgt', 'depth');

  public $validationRules = [
    'AreaName'=> 'required',
    'AreaType'=> 'required'
  ];

  public function ParentArea(){
    return $this->belongsTo('fa\model\Area','parent_id');
  }

  public function nested(){
    $this->get()->toHierarchy()->toArray();
  }
}
