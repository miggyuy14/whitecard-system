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
        @foreach ($users as $user)
        <tbody>
                
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email}}</td>
                <td>{{ $user->created_at }}</td>
            <td>
                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
   
                    {{-- <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a> --}}
   
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
        <form action="{{ route('users.store') }}" method="POST">
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
