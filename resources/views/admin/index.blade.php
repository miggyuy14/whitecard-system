@extends('layouts.admin')
@section('content')

{{-- <div id="app">
    <create>

    </create>
</div> --}}
<div class="content">
    <div class="container-fluid">
<div class="row">

    <div class="col sm-9 pl-5">
    <div class="card card-body mb-2 d-flex justify-content-center">
        <h1 class="d-flex justify-content-center pt-3 pb-2">List of Whitecards</h1>
        {{-- <a href="/whitecardsave"><button class="btn btn-success"> Entry</button></a> --}}

        <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <th>ID</th>
            <th>Subject</th>
            <th>Name</th>
            <th>Status</th>
            <th>Date Created</th>
            {{-- <th>Assigned To</th> --}}
            <th>Actions</th>
        </thead>
        @foreach ($whitecards as $admin)
        <tbody>

            <td>{{ $admin->id }}</td>
            <td>{{ $admin->subject_name }}</td>
            <td>{{ $admin->first_name }} {{ $admin->middle_initial }} {{ $admin->last_name }}</td>
            <td>{{ $admin->status }}</td>
            <td>{{ $admin->created_at }}</td>
            <td>
                {{-- <a class="btn btn-info" href="/admin/{{ $whitecard->id }}" >Edit</a> --}}
                <form action="{{ route('admin.destroy',$admin->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>

        </tbody>
        @endforeach
        {{ $whitecards->links() }}
        </table>
        
       </div>
    </div>

    <div class="col-sm-3 pr-5">
        <form action="/whitecard" method="POST">
            @csrf
        <div class="card card-body mb-2 d-flex justify-content-center">
            <H2>New Whitecard</H2>

                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" placeholder="first name">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" placeholder="last name">
                    <label for="middle_initial">Middle Initial</label>
                    <input type="text" name="middle_initial" placeholder="middle initial">
                    <label for="subject_name">Subject Code</label>
                    <input type="text" name="subject_name" placeholder="subject code">
                    <label for="middle_initial">Semester</label>
                    <input type="text" name="semester" placeholder="semester">
                    <label for="middle_initial">College Branch</label>
                    <input type="text" name="college_branch" placeholder="college branch">
                    <button type="submit" class="btn btn-sm btn-success mt-3">Submit</button>

        </div>
    </div>
</form>
    </div>

    </div>
</div>


@endsection
