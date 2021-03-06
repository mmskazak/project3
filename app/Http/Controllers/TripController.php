<?php

namespace App\Http\Controllers;

use App\Http\Resources\TripResource;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @param $place
     * @return \Illuminate\Support\Collection
     */
    public function index(Request $request, $place): \Illuminate\Support\Collection
    {

        if($place === 'serpukhov') {
            $trips =  Trip::where('to_serpukhov',Trip::TO_SERPUKHOV)->get();
        } else {
            $trips =  Trip::where('to_moscow',Trip::TO_MOSCOW)->get();
        }

        return TripResource::collection($trips)->collection;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
