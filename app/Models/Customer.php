<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',
        'email',
        'status',
        'password',
        'otp',
        'subscribed_to_news_letter',
        'notes',
        'address1',
        'address2',
        'country',
        'state',
        'city',
        'postcode',
        'phone',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'subscribed_to_news_letter' => 'boolean',
        'date_of_birth' => 'date',
        'status' => 'integer',
    ];

    // Relationship: Customer has many Orders
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // Relationship: Customer has many Reviews
    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }

    // Relationship: Customer wishlist
    public function wishLists()
    {
        return $this->hasMany(WishList::class);
    }
}
