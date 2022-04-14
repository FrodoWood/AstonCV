@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <h1 class="text-center">CVs</h1>
            <a class="btn btn-primary my-2" href="{{route('createCV')}}" role="button">Create CV</a>
        </div>
    </div>
</div>

@foreach($cvs as $cv)

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <a href="{{route('showCV', ['cv'=>$cv])}}" class="card-header text-capitalize text-decoration-none link-dark"><strong>{{ $cv->name }}</strong></a>

                <div class="card-body">
                    <!--  Display cvs here -->
                    <div class="container flex">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Name:</strong> {{$cv->name}}</li>
                            <li class="list-group-item"><strong>Email:</strong> {{$cv->email}}</li>
                            <li class="list-group-item"><strong>Key programming:</strong> {{$cv->keyprogramming}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection