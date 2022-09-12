<?php

namespace App\Http\Controllers;

use App\Models\Charts;
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
        $charts = Charts::where('status', 'order')->get();
    
        return view('admin.order', [
            'orders' => $charts,
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
     * @param  \App\Models\Charts  $charts
     * @return \Illuminate\Http\Response
     */
    public function show(Charts $charts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Charts  $charts
     * @return \Illuminate\Http\Response
     */
    public function edit(Charts $charts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Charts  $charts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Charts $charts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Charts  $charts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Charts $charts)
    {
        //
    }
}
