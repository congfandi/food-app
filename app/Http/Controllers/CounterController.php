<?php

namespace App\Http\Controllers;

use App\Models\Counters;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counters = Counters::all();
        return response()->json([
            'status' => 'success',
            'data' => $counters,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // echo $request;
        // $counter = new Counters();
        // $counter->name = $request->name;
        // $counter->count = $request->count;
        // $counter->save();
        return response()->json([
            'status' => 'success',
            'data' => $request,
        ]);
    }        

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Counters  $counters
     * @return \Illuminate\Http\Response
     */
    public function show(Counters $counters)
    {

        $counter = Counters::find($counters->id);
        if(!$counter){
            return response()->json([
                'status' => 'success',
                'data' => 'Counter not found',
            ]);
        }
        return response()->json([
            'status' => 'success',
            'data' => $counters,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Counters  $counters
     * @return \Illuminate\Http\Response
     */
    public function edit(Counters $counters)
    {
        $counter = Counters::find($counters->id);
        return response()->json([
            'status' => 'success',
            'data' => $counter,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Counters  $counters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Counters $counters)
    {
        // $counter = Counters::find($counters->id);
        // $counter->name = $request->name;
        // $counter->count = $request->count;
        // $counter->save();
        return response()->json([
            'status' => 'success',
            'data' => $request,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Counters  $counters
     * @return \Illuminate\Http\Response
     */
    public function destroy(Counters $counters)
    {
        $counter = Counters::find($counters->id);
        $counter->delete();
        return response()->json([
            'status' => 'success',
            'data' => $counter,
        ]);
    }
}
