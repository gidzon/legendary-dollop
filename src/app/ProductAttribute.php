<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ProductAttribute extends Model
{
    public $timestamps = false;
    protected $fillable = ['product_id', 'attr_name', 'attr_value'];

    
}
