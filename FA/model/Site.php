<?php

namespace fa\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\SoftDeletes;

class Site extends Model
{
    use SoftDeletes;

    protected $table = "sites";

    public $timestamps = true;

    protected $softDelete = true;

    protected $primaryKey = "id";

    protected $guarded = [
        'id'
    ];

    protected $hidden = [];

    public $validationRules = [
        'name'=> 'required',
        'companyId' => 'required',
        'addressId' => 'required'
    ];

    public function Company(){
        return $this->belongsTo('fa\model\Company','companyId');
    }
    public function Address(){
        return $this->belongsTo('fa\model\Address','addressId');
    }

}
