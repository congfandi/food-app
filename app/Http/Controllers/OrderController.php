<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use Illuminate\Http\Request;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Carts::where('status', 'order')->get();
    
        return view('admin.order', [
            'orders' => $carts->load('foodsCarts'),
            'menu' => 'Orders',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function show(carts $carts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function edit(carts $carts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, carts $carts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function destroy(carts $carts)
    {
        //
    }
}
