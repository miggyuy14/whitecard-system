<?php

namespace App\Http\Controllers;

use App\Whitecard;
use Illuminate\Http\Request;
use App\Http\Resources\Whitecard as WhitecardResource;

class WhitecardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whitecards = Whitecard::orderBy('created_at', 'desc')->paginate(10);
        return WhitecardResource::collection($whitecards);
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
     * @param  \App\Whitecard  $whitecard
     * @return \Illuminate\Http\Response
     */
    public function show(Whitecard $whitecard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Whitecard  $whitecard
     * @return \Illuminate\Http\Response
     */
    public function edit(Whitecard $whitecard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Whitecard  $whitecard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Whitecard $whitecard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Whitecard  $whitecard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Whitecard $whitecard)
    {
        //
    }
}
