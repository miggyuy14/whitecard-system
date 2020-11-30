<?php

namespace App\Http\Controllers;

use App\User;
use App\Grades;
use App\Student;
use Illuminate\Http\Request;

class AdminGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Student::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.student', compact('users'));
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
        $user = New Student;

        $user->student_id = $request->input('student_id');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->middle_initial = $request->input('middle_initial');
        $user->course = $request->input('course');
        $user->curriculum = $request->input('curriculum');
        $user->save();
        return redirect('/admin/encode');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $user
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
        $grades = Grades::where('stud_id', $user)->get();

        return view('admin.grade', compact('grades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
