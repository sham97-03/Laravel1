<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = ['pharmacist_id','status','payment','order_date'];
    public function pharmacist()
{
    return $this->belongsTo(User::class, 'pharmacist_id');
}
    public function medicines()
{
        return $this->belongsToMany(Medicine::class)->withPivot('quantity');
}
}
