<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    if ($request->has('name') && $request->has('count')) {
        $counter = new Counters();
        $counter->name = $request->name;
        $counter->count = $request->count;
        $counter->save();
        return response()->json([
            'status' => 'success',
            'data' => $counter,
        ]);
    } else {
        return response()->json([
            'status' => 'error',
            'message' => 'Missing name or count',
        ]);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Counters  $counters
     * @return \Illuminate\Http\Response
     */
    public function show(Counters $counter)
    {
        if ($counter) {
            return response()->json([
                'status' => 'success',
                'data' => $counter,
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Counter not found',
            ]);
        }
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
        if ($counters) {
            if ($request->has('name')) {
                $counters->name = $request->name;
            }
            if ($request->has('count')) {
                $counters->count = $request->count;
            }
            $counters->save();
            return response()->json([
                'status' => 'success',
                'data' => $counters,
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Counter not found',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Counters  $counters
     * @return \Illuminate\Http\Response
     */
    public function destroy(Counters $counters)
    {
        if ($counters) {
            $counters->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Counter deleted',
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Counter not found',
            ]);
        }
    }
}
