@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-capitalize text-decoration-none link-dark">{{ $cv->name }}</div>

                <div class="card-body">
                    <!--  Display cvs here -->
                    <div class="container flex">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Name:</strong> {{$cv->name}}</li>
                            <li class="list-group-item"><strong>Email:</strong> {{$cv->email}}</li>
                            <li class="list-group-item"><strong>Key programming:</strong> {{$cv->keyprogramming}}</li>
                            <li class="list-group-item"><strong>Profile:</strong> {{$cv->profile}}</li>
                            <li class="list-group-item"><strong>Education:</strong> {{$cv->education}}</li>
                            <li class="list-group-item"><strong>Links:</strong> {{$cv->URLlinks}}</li>
                        </ul>
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