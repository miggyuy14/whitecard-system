@extends('layouts.admin')
@section('content')

{{-- <div id="app">
    <create>

    </create>
</div> --}}
<div class="content">
    <div class="container-fluid">
<div class="row">
    <div class="container">
    <div class="col sm-9 pl-5">
    <div class="card card-body mb-2 d-flex justify-content-center">
        <h1 class="d-flex justify-content-center pt-3 pb-2">List of Students</h1>
        {{-- <a href="/whitecardsave"><button class="btn btn-success"> Entry</button></a> --}}

        <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <th>ID</th>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Middle Initial</th>
            <th>Course</th>
            <th>Curriculum</th>
            <th>Date Created</th>
            {{-- <th>Assigned To</th> --}}
            <th>Actions</th>
        </thead>
        @foreach ($users as $user)
        <tbody>
                
                <td><a href="{{ route('encode.show',$user->id) }}">{{ $user->id }}</a></td>
                <td>{{ $user->student_id }}</td>
                <td>{{ $user->first_name}}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->middle_initial }}</td>
                <td>{{ $user->course }}</td>
                <td>{{ $user->curriculum }}</td>
                <td>{{ $user->created_at }}</td>
            <td>
                <form action="{{ route('encode.destroy',$user->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('addGrades.edit',$user->id) }}">Add Grades</a>
    
                    {{-- <a class="btn btn-primary" href="{{ route('encode.edit',$user->id) }}">Edit</a> --}}
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>

            
        </tbody>
        @endforeach
        {{ $users->links() }}
        </table>

       </div>
    </div>



</div>
    <div class="col-sm-3 pr-5">
        <form action="{{ route('encode.store') }}" method="POST">
            @csrf
        <div class="card card-body mb-2 d-flex justify-content-center">
            <H2>New Student</H2>
                    
                    <label for="first_name">Student Number</label>
                    <input type="text" name="student_id" placeholder="Student ID">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" placeholder="First Name">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" placeholder="Last Name">
                    <label for="middle_initial">Middle Initial</label>
                    <input type="text" name="middle_initial" placeholder="Middle Initial">
                    <label for="first_name">Curriculum</label>
                    <input type="text" name="curriculum" placeholder="Curriculum year">
                    <label for="course">Course</label>
                    <select name="course">
                        <option value="BSIS">BSIS</option>
                        <option value="BSIT">BSIT</option>
                        <option value="BSCS">BSCS</option>
                    </select>
                    <button type="submit" class="btn btn-sm btn-success mt-3">Submit</button>

        </div>
    </div>
</form>
    </div>

    </div>
</div>



@endsection
