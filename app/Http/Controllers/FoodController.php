<?php

namespace App\Http\Controllers;

use App\Models\foods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.food.index', [
            'foods' => DB::table('foods')->paginate(15),
            'menu' => 'Foods',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.food.create', [
            'menu' => 'Create Food',
        ]);
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
     * @param  \App\Models\foods  $foods
     * @return \Illuminate\Http\Response
     */
    public function show(foods $foods)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\foods  $foods
     * @return \Illuminate\Http\Response
     */
    public function edit(foods $foods)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\foods  $foods
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, foods $foods)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\foods  $foods
     * @return \Illuminate\Http\Response
     */
    public function destroy(foods $foods)
    {
        //
    }
}
