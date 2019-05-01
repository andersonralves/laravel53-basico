<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'name', 'number', 'active', 'category', 'description'
    ];

    //protected $guarded = [];
}
