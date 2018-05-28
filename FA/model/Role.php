<?php

namespace fa\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    protected $table = "roles";

    protected $softDelete = true;

    public $timestamps = true;

    protected $primaryKey = "id";

    protected $fillable = [
        'name','description'
    ];

    public $validationRules = [
        'name'=> 'required'
    ];


    public function users(){
        return $this->belongsToMany('fa\model\User','user_role','roleId', 'userId');
    }

    public function permissions(){
        return $this->belongsToMany('fa\model\Permission','permission_role','roleId', 'permissionId');
    }
}
