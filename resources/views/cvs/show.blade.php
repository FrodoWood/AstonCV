@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-capitalize text-decoration-none link-dark">{{ $cv->name }}</div>

                <div class="card-body">
                    <!--  Display cvs here -->
                    <!-- <div class="container flex">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Name:</strong> {{$cv->name}}</li>
                            <li class="list-group-item"><strong>Email:</strong> {{$cv->email}}</li>
                            <li class="list-group-item"><strong>Key programming:</strong> {{$cv->keyprogramming}}</li>
                            <li class="list-group-item"><strong>Profile:</strong> {{$cv->profile}}</li>
                            <li class="list-group-item"><strong>Education:</strong> {{$cv->education}}</li>
                            <li class="list-group-item"><strong>Links:</strong> {{$cv->URLlinks}}</li>
                        </ul>
                    </div> -->
                    <!-- Custom table design -->

                    <div class="container">
                        <div class="row">
                            <div class="col-4 text-capitalize"><strong>Name:</strong></div>
                            <div class="col-8 text-capitalize">{{$cv->name}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4"><strong>Email:</strong></div>
                            <div class="col-8">{{$cv->email}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4"><strong>Key programming:</strong></div>
                            <div class="col-8">{{$cv->keyprogramming}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4"><strong>Profile:</strong></div>
                            <div class="col-8">{{$cv->profile}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4"><strong>Education:</strong></div>
                            <div class="col-8">{{$cv->education}}</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4"><strong>Links:</strong></div>
                            <div class="col-8">{{$cv->URLlinks}}</div>
                        </div>
                    </div>

                    <div class="container mt-4">
                        <a class="btn btn-success my-2" href="{{route('editCV', ['cv'=>$cv])}}" role="button">Edit</a>
                        <a class="btn btn-secondary my-2" href="{{route('cvs')}}" role="button">Go back</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection