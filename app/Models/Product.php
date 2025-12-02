<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'special_price',
        'special_price_start',
        'special_price_end',
        'brand_id',
        'status',
        'quantity',
        'sku',
        'image',
    ];

    // Relationships
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_category');
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'product_sizes');
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'product_colors');
    }

    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }

    public function wishLists()
    {
        return $this->hasMany(WishList::class);
    }
}
