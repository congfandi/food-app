<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodsCart extends Model
{
    use HasFactory;

    protected $table = 'foods_carts';
    protected $with = ['food'];
    public function food()
    {
        return $this->hasOne(Foods::class, 'id', 'food_id');
    }
}
