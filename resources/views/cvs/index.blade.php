@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>CVs</h1>
            <a class="btn btn-primary my-4" href="{{route('createCV')}}" role="button">Create CV</a>
        </div>
    </div>
</div>

@foreach($cvs as $cv)

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <a href="{{route('editCV', ['cv'=>$cv])}}" class="card-header text-capitalize">{{ $cv->name }}</a>

                <div class="card-body">
                    <!--  Display cvs here -->
                    <div class="container flex">
                        <ul>
                            <li>{{$cv->name}}</li>
                            <li>{{$cv->email}}</li>
                            <li>{{$cv->keyprogramming}}</li>
                            <li>{{$cv->profile}}</li>
                            <li>{{$cv->education}}</li>
                            <li>{{$cv->URLlinks}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection