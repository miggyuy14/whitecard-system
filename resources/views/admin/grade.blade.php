@extends('layouts.admin')
@section('content')

{{-- <div id="app">
    <create>

    </create>
</div> --}}


    {{-- <div class="container"> --}}
    
    <div class="card card-group mb-5 mr-5 ml-5">
        
    <div class="col-sm-12 pl-5 pr-5 pt-5">
        <h1 class="d-flex justify-content-center pb-2">First Year</h1>
        <button class="btn btn-success justify-content-end" href="{{ route('encode.edit') }}">Add grades</button>
    <div class="card card-body mb-2 d-flex justify-content-center">
        <h2 class="d-flex justify-content-center pt-3 pb-2">First Semester</h2>
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
            <th>Actions</th>
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
            <td>
                
                    <a class="btn btn-info" href="{{ route('encode.edit',$user->id) }}">Edit</a>
    
            </td>
        </tbody>
        @endforeach
        </table>

       </div>
    </div>
    
    <div class="col-sm-12 pl-5 pr-5 pt-5">
        <div class="card card-body mb-2 d-flex justify-content-center">
            <h2 class="d-flex justify-content-center pt-3 pb-2">Second Semester</h2>
            {{-- <a href="/whitecardsave"><button class="btn btn-success"> Entry</button></a> --}}
    
            <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <th>ID</th>
                <th>IT104</th>
                <th>IT105</th>
                <th>IT106</th>
                <th>Statcomp</th>
                <th>Engl 02</th>
                <th>Natsci</th>
                <th>Mgt 01</th>
                <th>PE 02</th>
                <th>NSTP 02</th>
                <th>Actions</th>
                {{-- <th>Assigned To</th> --}}
            </thead>
            @foreach ($grades as $grade) 
            <tbody>
                <td>{{ $grade->id }}</td>
                <td>{{ $grade->it104 }}</td>
                <td>{{ $grade->it105 }}</td>
                <td>{{ $grade->it106 }}</td>
                <td>{{ $grade->statcomp }}</td>
                <td>{{ $grade->engl02 }}</td>
                <td>{{ $grade->natsci }}</td>
                <td>{{ $grade->mgt01 }}</td>
                <td>{{ $grade->pe02 }}</td>
                <td>{{ $grade->nstp02 }}</td>
                <td>
                
                    <a class="btn btn-info" href="{{ route('encode.edit',$user->id) }}">Edit</a>
    
            </td>
            </tbody>
            @endforeach
            </table>
    
           </div>
        </div>

    </div>

    <div class="card card-group mb-5 mr-5 ml-5">
        
        <div class="col-sm-12 pl-5 pr-5 pt-5">
            <h1 class="d-flex justify-content-center pb-2">Second Year</h1>
        <div class="card card-body mb-2 d-flex justify-content-center">
            <h2 class="d-flex justify-content-center pt-3 pb-2">First Semester</h2>
            {{-- <a href="/whitecardsave"><button class="btn btn-success"> Entry</button></a> --}}
    
            <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <th>ID</th>
                <th>IT201</th>
                <th>IT202</th>
                <th>IT203</th>
                <th>IT204</th>
                <th>Math 02</th>
                <th>Physics 01</th>
                <th>Socsci</th>
                <th>PE 03</th>
                <th>Actions</th>
                {{-- <th>Assigned To</th> --}}
            </thead>
            @foreach ($grades as $grade) 
            <tbody>
                <td>{{ $grade->id }}</td>
                <td>{{ $grade->it201 }}</td>
                <td>{{ $grade->it202 }}</td>
                <td>{{ $grade->it203 }}</td>
                <td>{{ $grade->it204 }}</td>
                <td>{{ $grade->fil01 }}</td>
                <td>{{ $grade->physics01 }}</td>
                <td>{{ $grade->pe03 }}</td>
                <td>
                
                    <a class="btn btn-info" href="{{ route('encode.edit',$user->id) }}">Edit</a>
    
            </td>
            </tbody>
            @endforeach
            </table>
    
           </div>
        </div>
        <div class="col-sm-12 pl-5 pr-5 pt-5">
            <div class="card card-body mb-2 d-flex justify-content-center">
                <h2 class="d-flex justify-content-center pt-3 pb-2">Second Semester</h2>
                {{-- <a href="/whitecardsave"><button class="btn btn-success"> Entry</button></a> --}}
        
                <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <th>ID</th>
                    <th>IT205</th>
                    <th>IT206</th>
                    <th>IT207</th>
                    <th>Fil 02</th>
                    <th>Engl 03</th>
                    <th>Econ 101</th>
                    <th>PGC</th>
                    <th>PE 04</th>
                    <th>Actions</th>
                    {{-- <th>Assigned To</th> --}}
                </thead>
                @foreach ($grades as $grade) 
                <tbody>
                    <td>{{ $grade->id }}</td>
                    <td>{{ $grade->it205 }}</td>
                    <td>{{ $grade->it206 }}</td>
                    <td>{{ $grade->it207 }}</td>
                    <td>{{ $grade->fil02 }}</td>
                    <td>{{ $grade->engl03 }}</td>
                    <td>{{ $grade->econ101 }}</td>
                    <td>{{ $grade->pgc }}</td>
                    <td>{{ $grade->pe04 }}</td>
                    <td>
                
                        <a class="btn btn-info" href="{{ route('encode.edit',$user->id) }}">Edit</a>
        
                </td>
                </tbody>
                @endforeach
                </table>
        
               </div>
            </div>
    
        </div>

        <div class="card card-group mb-5 mr-5 ml-5">
        
            <div class="col-sm-12 pl-5 pr-5 pt-5">
                <h1 class="d-flex justify-content-center pb-2">Third Year</h1>
            <div class="card card-body mb-2 d-flex justify-content-center">
                <h2 class="d-flex justify-content-center pt-3 pb-2">First Semester</h2>
                {{-- <a href="/whitecardsave"><button class="btn btn-success"> Entry</button></a> --}}
        
                <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <th>ID</th>
                    <th>IT301</th>
                    <th>IT302</th>
                    <th>IT303</th>
                    <th>IT304</th>
                    <th>IT305</th>
                    <th>IT306</th>
                    <th>Law 01</th>
                    <th>Engl 04</th>
                    <th>Actions</th>
                    {{-- <th>Assigned To</th> --}}
                </thead>
                @foreach ($grades as $grade) 
                <tbody>
                    <td>{{ $grade->id }}</td>
                    <td>{{ $grade->it301 }}</td>
                    <td>{{ $grade->it302 }}</td>
                    <td>{{ $grade->it303 }}</td>
                    <td>{{ $grade->it304 }}</td>
                    <td>{{ $grade->it305 }}</td>
                    <td>{{ $grade->it306 }}</td>
                    <td>{{ $grade->nstp01 }}</td>
                    <td>{{ $grade->law01 }}</td>
                    <td>{{ $grade->engl04 }}</td>
                    <td>
                
                        <a class="btn btn-info" href="{{ route('encode.edit',$user->id) }}">Edit</a>
        
                </td>
                </tbody>
                @endforeach
                </table>
        
               </div>
            </div>
            <div class="col-sm-12 pl-5 pr-5 pt-lg-5 pb-3">
                <div class="card card-body mb-2 d-flex justify-content-center">
                    <h2 class="d-flex justify-content-center pt-3 pb-2">Second Semester</h2>
                    {{-- <a href="/whitecardsave"><button class="btn btn-success"> Entry</button></a> --}}
            
                    <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <th>ID</th>
                        <th>IT307</th>
                        <th>IT308</th>
                        <th>IT309</th>
                        <th>IT310</th>
                        <th>IT311</th>
                        <th>Worldlit</th>
                        <th>Actions</th>
                        {{-- <th>Assigned To</th> --}}
                    </thead>
                    @foreach ($grades as $grade) 
                    <tbody>
                        <td>{{ $grade->id }}</td>
                        <td>{{ $grade->it307 }}</td>
                        <td>{{ $grade->it308 }}</td>
                        <td>{{ $grade->it309 }}</td>
                        <td>{{ $grade->it310 }}</td>
                        <td>{{ $grade->it311 }}</td>
                        <td>{{ $grade->worldlit }}</td>
                        <td>
                
                            <a class="btn btn-info" href="{{ route('encode.edit',$user->id) }}">Edit</a>
            
                    </td>
                    </tbody>
                    @endforeach
                    </table>
            
                   </div>
                </div>
        
            </div>

            <div class="card card-group mb-5 mr-5 ml-5">
        
                <div class="col-sm-12 pl-5 pr-5 pt-5">
                    <h1 class="d-flex justify-content-center pb-2">Fourth Year</h1>
                <div class="card card-body mb-2 d-flex justify-content-center">
                    <h2 class="d-flex justify-content-center pt-3 pb-2">First Semester</h2>
                    {{-- <a href="/whitecardsave"><button class="btn btn-success"> Entry</button></a> --}}
            
                    <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <th>ID</th>
                        <th>IT401</th>
                        <th>IT402</th>
                        <th>IT403</th>
                        <th>IT404</th>
                        <th>Philo 01</th>
                        <th>Actions</th>
                        {{-- <th>Assigned To</th> --}}
                    </thead>
                    @foreach ($grades as $grade) 
                    <tbody>
                        <td>{{ $grade->id }}</td>
                        <td>{{ $grade->it401 }}</td>
                        <td>{{ $grade->it402 }}</td>
                        <td>{{ $grade->it403 }}</td>
                        <td>{{ $grade->it404 }}</td>
                        <td>{{ $grade->philo01 }}</td>
                        <td>
                
                            <a class="btn btn-info" href="{{ route('encode.edit',$user->id) }}">Edit</a>
            
                    </td>
                    </tbody>
                    @endforeach
                    </table>
            
                   </div>
                </div>
                <div class="col-sm-12 pl-5 pr-5 pt-lg-5 pb-3">
                    <div class="card card-body mb-2 d-flex justify-content-center">
                        <h2 class="d-flex justify-content-center pt-3 pb-2">Second Semester</h2>
                        {{-- <a href="/whitecardsave"><button class="btn btn-success"> Entry</button></a> --}}
                
                        <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <th>ID</th>
                            <th>FL</th>
                            <th>IT405</th>
                            <th>Actions</th>
                            {{-- <th>Assigned To</th> --}}
                        </thead>
                        @foreach ($grades as $grade) 
                        <tbody>
                            <td>{{ $grade->id }}</td>
                            <td>{{ $grade->fl }}</td>
                            <td>{{ $grade->it405 }}</td>
                            <td>
                
                                <a class="btn btn-info" href="{{ route('encode.edit',$user->id) }}">Edit</a>
                
                        </td>
                        </tbody>
                        @endforeach
                        </table>
                
                       </div>
                    </div>
            
                </div>

{{-- </div> --}}
@endsection
