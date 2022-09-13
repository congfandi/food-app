<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Carts;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Carts::where('status', 'pending')->get();
        return response()->json([
            'status' => 'success',
            'data' => $carts,
        ]);
    }

    public function order()
    {
        $carts = Carts::where('status', 'order')->get();
        return response()->json([
            'status' => 'success',
            'data' => $carts->load(['foodsCarts','user']),
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
     * @param  \App\Models\Carts  $Carts
     * @return \Illuminate\Http\Response
     */
    public function show(Carts $Carts)
    {
        return response()->json([
            'status' => 'success',
            'data' => $Carts->foods,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carts  $Carts
     * @return \Illuminate\Http\Response
     */
    public function edit(Carts $Carts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carts  $Carts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carts $Carts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carts  $Carts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carts $Carts)
    {
        //
    }
}
