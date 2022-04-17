@extends('layouts.app')

@section('content')



<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-capitalize">{{ $cv->name }}</div>


                <form id="update-form" class="d-flex flex-column  py-4" method="POST" action="/cvs/{{ $cv->id }}">
                    @method('PUT')
                    @csrf

                    <div class="row px-2 justify-content-center">
                        <label class="col-4" for="name">Name</label>
                        <input class="col-6 mb-3" type="text" id="name" name="name" value="{{ $cv->name }}">
                    </div>

                    @error('name')
                    <div class="row px-2 justify-content-center">
                        <div class="col-4"></div>
                        <span class="col-6 mb-3 alert alert-danger fs-6">
                            {{ $message }}
                        </span>
                    </div>
                    @enderror

                    <div class="row px-2 justify-content-center">
                        <label class="col-4" for="email">Email</label>
                        <input class="col-6 mb-3" type="email" id="email" name="email" value="{{ $cv->email }}">
                    </div>
                    @error('email')
                    <div class="row px-2 justify-content-center">
                        <div class="col-4"></div>
                        <span class="col-6 mb-3 alert alert-danger fs-6">
                            {{ $message }}
                        </span>
                    </div>
                    @enderror

                    <div class=" row px-2 justify-content-center">
                        <label class="col-4" for="keyprogramming">Key Programming</label>
                        <textarea name="keyprogramming" id="keyprogramming" cols="30" rows="3" class="col-6 mb-3">{{ $cv->keyprogramming }}</textarea>
                    </div>

                    <div class=" row px-2 justify-content-center">
                        <label class="col-4" for="profile">Profile</label>
                        <textarea name="profile" id="profile" cols="30" rows="3" class="col-6 mb-3">{{ $cv->profile }}</textarea>
                    </div>

                    <div class=" row px-2 justify-content-center">
                        <label class="col-4" for="education">Education</label>
                        <textarea name="education" id="education" cols="30" rows="3" class="col-6 mb-3">{{ $cv->education }}</textarea>
                    </div>

                    <div class=" row px-2 justify-content-center">
                        <label class="col-4" for="URLlinks">Links</label>
                        <textarea name="URLlinks" id="URLlinks" cols="30" rows="3" class="col-6 mb-3">{{ $cv->URLlinks }}</textarea>
                    </div>

                    <!-- <div class="row px-2 justify-content-center">
                        <div class="col-4">
                            <button type="submit" class="btn btn-success">Update</button>

                            <a class="btn btn-secondary" href="{{route('cvs')}}" role="button">Cancel</a>
                        </div>
                        <div class="col-6">
                            <div class="row justify-content-end">
                                <div class="col-4">
                                    <form action="/cvs/{{ $cv->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <button type="submit" class="btn btn-success">Update</button> -->

                </form>

                <!-- <form method="POST" action="/cvs/{{ $cv->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> -->

                <div class="row px-2 pb-4 justify-content-center">
                    <div class="col-4">
                        <button form="update-form" type="submit" class="btn btn-success">Update</button>

                        <a class="btn btn-secondary" href="{{route('cvs')}}" role="button">Cancel</a>
                    </div>
                    <div class="col-6">
                        <div class="row justify-content-end">
                            <div class="col-4">
                                <form method="POST" action="/cvs/{{ $cv->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection