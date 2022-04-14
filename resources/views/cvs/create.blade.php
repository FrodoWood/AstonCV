@extends('layouts.app')

@section('content')



<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-capitalize">{{ Auth::user()->name}}'s CV</div>


                <form class="d-flex flex-column mx-auto py-4" method="POST" action="/cvs">
                    @csrf

                    <div class="row px-2">
                        <label class="col-4" for="name">Name</label>
                        <input class="col-6 mb-3" type="text" id="name" name="name">
                    </div>
                    @error('name')
                    <div class="row px-2">
                        <div class="col-4"></div>
                        <span class="col-6 mb-3 alert alert-danger fs-6">
                            {{ $message }}
                        </span>
                    </div>
                    @enderror

                    <div class="row px-2">
                        <label class="col-4" for="email">Email</label>
                        <input class="col-6 mb-3" type="email" id="email" name="email">
                    </div>
                    @error('email')
                    <div class="row px-2">
                        <div class="col-4"></div>
                        <span class="col-6 mb-3 alert alert-danger fs-6">
                            {{ $message }}
                        </span>
                    </div>
                    @enderror

                    <div class=" row px-2">
                        <label class="col-4" for="keyprogramming">Key Programming</label>
                        <textarea name="keyprogramming" id="keyprogramming" cols="30" rows="3" class="col-6 mb-3"></textarea>
                    </div>


                    <div class="row px-2">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </div>

                </form>


            </div>
        </div>
    </div>
</div>


@endsection