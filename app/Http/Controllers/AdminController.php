<?php

namespace App\Http\Controllers;

use App\User;
use App\Whitecard;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $whitecards = Whitecard::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.index', compact('whitecards'));

    }

    public function userlist()
    {
        $faculties = User::orderBy('created_at', 'desc')->where('role', 'user')->paginate(10);
        $students = User::orderBy('created_at', 'desc')->where('role', 'student')->paginate(10);
        return view('admin.faculty', compact('faculties', 'students'));
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createuser(Request $request)
    {
        $user = New User;
        $password = $request->input('password');
        $hash = Hash::make($password);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $hash;
        $user->role = $request->input('role');
        $user->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
