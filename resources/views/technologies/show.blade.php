@extends('layouts/admin')


@section('title')
    {{$technology->name}}
@endsection


@section('main')
    
    <div class="container mt-4">

        {{-- @dd($) --}}
        <div class="card d-flex">
            {{-- <div class="card-img-top">
                <img src="{{Vite::asset($technology->img)}}" alt="site preview" width="600px">
            </div> --}}
            <div class="p-3">
                <div class="d-flex justify-content-between">
                    
                    <h1> {{$technology->name}} </h1>

            </div>
        </div>

    </div>
    

@endsection