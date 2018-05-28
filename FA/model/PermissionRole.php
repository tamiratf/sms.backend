<?php

namespace fa\model;

use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{

    protected $table = "permission_role";

    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = [
        'permissionId', 'roleId'
    ];

    public $validationRules = [
        'permissionId'=> 'required',
        'roleId'=> 'required'
    ];


    public function permission(){
        return $this->belongsTo('fa\model\Permission','permissionId','id');
    }

    public function role(){
        return $this->belongsTo('fa\model\Role','roleId','id');
    }
}
