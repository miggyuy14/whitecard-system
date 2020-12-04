@extends('admin.layout')
@section('content')

<div class="container">
<div class="d-flex "></div>
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