<?php

namespace fa\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

    protected $table = "companies";

    public $timestamps = true;

    protected $softDelete = true;

    protected $primaryKey = "id";

    protected $guarded = [
        'id'
    ];

    protected $hidden = [];

    public $validationRules = [
        'name'=> 'required'
    ];

}
