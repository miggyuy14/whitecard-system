<?php

namespace App\Http\Controllers;

use App\Whitecard;

use App\User;
use Illuminate\Http\Request;
use App\Http\Resources\Whitecard as WhitecardResource;
use Illuminate\Support\Facades\Auth;

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $user = Auth::user();
        // $profId = Auth::user()->id;

        $whitecards = $request->isMethod('put') ? Whitecard::findOrFail($request->whitecard_id) : new Whitecard;

        $whitecards->id = $request->input('whitecard_id');
        $whitecards->first_name = $request->input('first_name');
        $whitecards->last_name = $request->input('last_name');
        $whitecards->middle_initial = $request->input('middle_initial');
        $whitecards->subject_name = $request->input('subject_name');
        $whitecards->semester = $request->input('semester');
        $whitecards->college_branch = $request->input('college_branch');
        $whitecards->status = "Pending";
        $whitecards->professors_name = $request->input('professor_name');
        $whitecards->user_id = '1';
        if ($whitecards->save()) {
            return new WhitecardResource($whitecards);
        }
        return null;
        // dd($whitecards);
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
