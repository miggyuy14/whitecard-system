@extends('layouts.app')
@section('content')

{{-- <div id="app">
    <create>

    </create>
</div> --}}

<div class="row">

    <div class="col sm-9 pl-5">
    <div class="card card-body mb-2 d-flex justify-content-center">
        <h1 class="d-flex justify-content-center pt-3 pb-2">First Semester</h1>
        {{-- <a href="/whitecardsave"><button class="btn btn-success"> Entry</button></a> --}}

        <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <th>ID</th>
            <th>IT101</th>
            <th>IT102</th>
            <th>IT103</th>
            <th>Psych 01</th>
            <th>Fil 01</th>
            <th>PE 01</th>
            <th>NSTP 01</th>
            <th>Engl 01</th>
            <th>Math 01</th>
            <th>Engl A01</th>
            <th>Math A01</th>
            <th>IT104</th>
            <th>IT105</th>
            <th>IT106</th>
            <th>Statcomp</th>
            <th>Engl 02</th>
            <th>Natsci</th>
            <th>Mgt 01</th>
            <th>PE 02</th>
            <th>NSTP 02</th>
            {{-- <th>Assigned To</th> --}}
        </thead>
        @foreach ($grades as $grade)
        <tbody>
            <td>{{ $grade->id }}</td>
            <td>{{ $grade->it101 }}</td>
            <td>{{ $grade->it102 }}</td>
            <td>{{ $grade->it103 }}</td>
            <td>{{ $grade->psych01 }}</td>
            <td>{{ $grade->fil01 }}</td>
            <td>{{ $grade->pe01 }}</td>
            <td>{{ $grade->nstp01 }}</td>
            <td>{{ $grade->engl01 }}</td>
            <td>{{ $grade->math01 }}</td>
            <td>{{ $grade->engla01 }}</td>
            <td>{{ $grade->matha01 }}</td>
            <td>{{ $grade->it104 }}</td>
            <td>{{ $grade->it105 }}</td>
            <td>{{ $grade->it106 }}</td>
            <td>{{ $grade->statcomp }}</td>
            <td>{{ $grade->engl02 }}</td>
            <td>{{ $grade->natsci }}</td>
            <td>{{ $grade->mgt01 }}</td>
            <td>{{ $grade->pe02 }}</td>
            <td>{{ $grade->nstp02 }}</td>
        </tbody>
        @endforeach
        </table>

       </div>
    </div>
    </div>


@endsection
