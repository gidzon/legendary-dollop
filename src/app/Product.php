<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'desc', 'price', 'latest', 'category_id', 'img_path'];

    public function attributes()
    {
        return $this->hasMany(ProductAttribute::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopePrice($query, $price)
    {
        return $query->where('price', '>=', $price);
    }

}
