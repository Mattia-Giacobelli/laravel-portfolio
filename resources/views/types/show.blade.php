@extends('layouts/admin')


@section('title')
    {{$type->name}}
@endsection


@section('main')
    
    <div class="container mt-4">

        {{-- @dd($type) --}}
        <div class="card d-flex">
            {{-- <div class="card-img-top">
                <img src="{{Vite::asset($type->img)}}" alt="site preview" width="600px">
            </div> --}}
            <div class="p-3">
                <div class="d-flex justify-content-between">
                    
                    <h1> {{$type->name}} </h1>

            </div>
        </div>

    </div>
    

@endsection