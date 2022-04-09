@extends('layouts.app')

@section('content')

@foreach($cvs as $cv)
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-capitalize">{{ $cv->name }}</div>

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