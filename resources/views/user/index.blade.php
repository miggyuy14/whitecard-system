@extends('layouts.app')
@section('content')

{{-- <div id="app">
    <create>

    </create>
</div> --}}

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
        @foreach ($whitecards as $whitecard)
        <tbody>

            <td>{{ $whitecard->id }}</td>
            <td>{{ $whitecard->subject_name }}</td>
            <td>{{ $whitecard->first_name }} {{ $whitecard->middle_initial }} {{ $whitecard->last_name }}</td>
            <td>{{ $whitecard->status }}</td>
            <td>{{ $whitecard->created_at }}</td>
            <td>
                <button class="btn btn-primary" >Edit</button>
                <a href="delete/{{ $whitecard->id }}"><button class="btn btn-danger" >Delete</button></a>
            </td>


        </tbody>
        @endforeach
        </table>
        {{ $whitecards->links() }}
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


@endsection
