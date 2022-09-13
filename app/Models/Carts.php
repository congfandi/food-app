<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;
    protected $with = ['user'];
    public function foods()
    {
        return $this->belongsToMany(Foods::class,'foods_carts', 'cart_id', 'food_id');
    }

    public function foodsCarts()
    {
        return $this->hasMany(FoodsCart::class, 'cart_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function totalOrder()
    {
        $carts = $this->foodsCarts;
        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart->food->price * $cart->quantity;
        }
        return $total;
    }

    public function totalDiscount()
    {
        $carts = $this->foodsCarts;
        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart->food->discount * $cart->quantity;
        }
        return $total;
    }

    public function totalPayment()
    {
        $total = $this->totalOrder();
        $discount = $this->totalDiscount();
        return $total - $discount;
    }

    public function totalProduct()
    {
        $foods = $this->foods;
        $total = 0;
        foreach ($foods as $key => $value) {
            $total += $value->pivot->quantity;
        }
        return $total;
    }
}
