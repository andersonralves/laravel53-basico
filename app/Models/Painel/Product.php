<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'name', 'number', 'active', 'category', 'description'
    ];

    public $rules = [
        'name'          => 'required|min:3|max:150',
        'number'        => 'required|numeric',
        'category'      => 'required',
        'description'   => 'min:3|max:1000'
    ];

    //protected $guarded = [];
}
