<?php

namespace fa\model;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = "user_role";

    protected $primaryKey = "id";

    public $timestamps = false;
    protected $fillable = [
        'userId', 'roleId'
    ];

    public $validationRules = [
        'userId'=> 'required',
        'roleId'=> 'required'
    ];


    public function user(){
        return $this->belongsTo('fa\model\User','userId','id');
    }

    public function role(){
        return $this->belongsTo('fa\model\Role','roleId','id');
    }
}
