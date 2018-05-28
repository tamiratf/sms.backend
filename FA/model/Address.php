<?php

namespace fa\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Address extends Model
{
    protected $table = "addresses";

    public $timestamps = false;

    protected $primaryKey = "id";

    protected $guarded = [
        'id'
    ];

    protected $hidden = [];

    public $validationRules = [
        'country'=> 'required',
        'reqion'=> 'required',
        'city'=> 'required'
    ];

    public function Location(){
        return $this->belongsTo('fa\model\Area','locationId');
    }

}
