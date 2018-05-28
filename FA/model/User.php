<?php

namespace fa\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;

class User extends Model
{
    use SoftDeletes;

    protected $table = "users";

    protected $softDelete = true;

    public $timestamps = true;

    protected $primaryKey = "id";

    protected $fillable = [
        'firstName', 'lastName', 'email', 'password','userName'
    ];

    protected $hidden = ['password'];

    public $validationRules = [
        'firstName'=> 'required',
        'userName'=> 'required',
        'email'=> 'required',
        'password'=> 'required'
    ];

    public function roles(){
        return $this->belongsToMany('fa\model\Role','user_role','userId', 'roleId');
    }

    public function setPasswordAttribute($pass) {        
        $this->attributes['password'] = Hash::make($pass);        
    }
}
