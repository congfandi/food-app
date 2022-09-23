<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FandiController extends Controller
{
    public function fandi($name){
        return $name." Tambahan";
    }
}
