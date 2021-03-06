<?php

namespace App\Http\Controllers;

use App\Whitecard;

use App\User;
use Illuminate\Http\Request;
use App\Http\Resources\Whitecard as WhitecardResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WhitecardController extends Controller
{

    // protected $user = Auth::user();
    // public $profName = $user->first_name;
    // public $profId = $user->id;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $user = Auth::id();
        $role = Auth::user()->role;
        if($role == 'admin'){
            // $whitecards = Whitecard::orderBy('created_at', 'desc')->paginate(10);
            // return view('user.index', compact('whitecards'));
            return redirect('/admin');
        }
        else if($role == 'student'){
            return redirect('/student');
        }
        else
        {
            $whitecards = Whitecard::orderBy('created_at', 'desc')->where('user_id', $user)->paginate(10);
            return view('user.index', compact('whitecards'));
        }
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $profId = Auth::user()->id;
        // $user = Auth::user()->name;
        // $name = $user->first_name;
        // $profName = $user['first_name'];
        // $profId = $user['id'];
        $whitecards = new Whitecard;

        $whitecards->id = $request->input('whitecard_id');
        $whitecards->first_name = $request->input('first_name');
        $whitecards->last_name = $request->input('last_name');
        $whitecards->middle_initial = $request->input('middle_initial');
        $whitecards->subject_name = $request->input('subject_name');
        $whitecards->semester = $request->input('semester');
        $whitecards->college_branch = $request->input('college_branch');
        $whitecards->status = "Pending";
        // $whitecards->professors_name = $profName;
        $whitecards->user_id = Auth::user()->id;
        $whitecards->save();
        return back();



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
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Whitecard  $whitecard
     * @return \Illuminate\Http\Response
     */
    public function edit(Whitecard $whitecard)
    {  
        // $confirm = 'Confirmed';
        // DB::update('update whitecards set status = ? where id = ?', [$confirm,$whitecard]);
        // return redirect()->route('whitecard.index')
        //                     ->with('success', 'whitecard confirmed');

        // Whitecard::where('id', $whitecard)->update(array('status' => 'Confirmed'));
        $whitecard->update(array('status' => 'Confirmed'));
        return redirect()->route('whitecard.index')
                            ->with('success', 'whitecard confirmed');
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
        $whitecard->delete();
        return redirect()->route('whitecard.index')
                            ->with('success', 'whitecard deleted');
    }

    public function test()
    {
        $user = Auth::user();
        return $user->name;
    }
}
