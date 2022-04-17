@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <h2 class="text-center">Search result:</h2>
        </div>
    </div>
</div>

@foreach($cvs as $cv)

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <a href="{{route('showCV', ['cv'=>$cv])}}" class="card-header text-capitalize text-decoration-none link-dark"><strong>{{ $cv->name }}</strong></a>

                <a href="{{route('showCV', ['cv'=>$cv])}}" class="text-decoration-none link-dark">
                    <div class="card-body">
                        <!--  Display cvs here -->
                        <!-- Custom table -->
                        <div class="container">
                            <div class="row">
                                <div class="col-5 col-md-4 text-capitalize">
                                    <strong>Name:</strong>
                                </div>
                                <div class="col-7 col-md-8 text-capitalize">
                                    {{$cv->name}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-5 col-md-4">
                                    <strong>Email:</strong>
                                </div>
                                <div class="col-7 col-md-8">
                                    {{$cv->email}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-5 col-md-4">
                                    <strong>Key programming:</strong>
                                </div>
                                <div class="col-7 col-md-8">
                                    {{$cv->keyprogramming}}
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection