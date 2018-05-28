<?php

namespace fa\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use SoftDeletes;

    protected $table = "permissions";

    protected $softDelete = true;

    public $timestamps = true;

    protected $primaryKey = "id";

    protected $fillable = [
        'name', 'description'
    ];

    public $validationRules = [
        'name'=> 'required'
    ];


    public function roles(){
        return $this->belongsToMany('fa\model\Role','permission_role','permissionId', 'roleId');
    }
}
