<?php

namespace fa\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;

    protected $table = "employees";

    public $timestamps = true;

    protected $softDelete = true;

    protected $primaryKey = "id";

    protected $guarded = [
        'id'
    ];

    protected $hidden = [];

    public $validationRules = [
        'givenName'=> 'required',
        'middleName'=> 'required',
        'gender'=> 'required',
        'isActiveEmployee' => 'required',
        'departmentId' => 'required'
    ];

}
