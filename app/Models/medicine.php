<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicine extends Model
{
    protected $fillable = ['scientific_name', 'Trade_name','category_id','category', 'Manufacturer', 'Available_Quantity', 'Expiration_date', 'price'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_medicine');
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }
    public function users()
    {
    return $this->belongsToMany(User::class, 'user_medicine')->withTimestamps();
    }
}
