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
        <h1 class="d-flex justify-content-center pt-3 pb-2">List of Faculty Members</h1>
        {{-- <a href="/whitecardsave"><button class="btn btn-success"> Entry</button></a> --}}

        <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th>Date Created</th>
            {{-- <th>Assigned To</th> --}}
            <th>Actions</th>
        </thead>
        @foreach ($faculties as $faculty)
        <tbody>

            <td>{{ $faculty->id }}</td>
                <td>{{ $faculty->name }}</td>
                <td>{{ $faculty->email}}</td>
                <td>{{ $faculty->created_at }}</td>
            <td>
                <button class="btn btn-primary" >Edit</button>
                <a href="delete/{{ $faculty->id }}"><button class="btn btn-danger" >Delete</button></a>
            </td>

            
        </tbody>
        @endforeach
        {{ $faculties->links() }}
        </table>

       </div>
    </div>

    <div class="col sm-9 pl-5">
        <div class="card card-body mb-2 d-flex justify-content-center">
            <h1 class="d-flex justify-content-center pt-3 pb-2">List of Students</h1>
            {{-- <a href="/whitecardsave"><button class="btn btn-success"> Entry</button></a> --}}
    
            <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>Date Created</th>
                {{-- <th>Assigned To</th> --}}
                <th>Actions</th>
            </thead>
            @foreach ($students as $student)
            <tbody>
    
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email}}</td>
                <td>{{ $student->created_at }}</td>
                <td>
                    <button class="btn btn-primary" >Edit</button>
                    <a href="delete/{{ $faculty->id }}"><button class="btn btn-danger" >Delete</button></a>
                </td>
    
    
            </tbody>
            @endforeach
            {{ $faculties->links() }}
            </table>
    
           </div>
        </div>

</div>
    <div class="col-sm-3 pr-5">
        <form action="/admin" method="POST">
            @csrf
        <div class="card card-body mb-2 d-flex justify-content-center">
            <H2>New User</H2>

                    <label for="first_name">Full name</label>
                    <input type="text" name="name" placeholder="Full name">
                    <label for="last_name">Password</label>
                    <input type="password" name="password" placeholder="Password">
                    <label for="middle_initial">Email</label>
                    <input type="text" name="email" placeholder="Email Address">
                    <label for="subject_name">Role</label>
                    <select name="role">
                        <option value="user">Faculty</option>
                        <option value="student">Student</option>
                        <option value="admin">Admin</option>
                    </select>

                    <button type="submit" class="btn btn-sm btn-success mt-3">Submit</button>

        </div>
    </div>
</form>
    </div>

    </div>
</div>


@endsection
