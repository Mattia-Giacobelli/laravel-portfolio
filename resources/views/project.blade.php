@extends('layouts/admin')


@section('title')
    Project
@endsection


@section('main')
    
    <div class="container">

        {{-- @dd($project) --}}
        <div class="card d-flex">
            <div class="card-img-top">
                <img src="{{Vite::asset($project->img)}}" alt="site preview" width="600px">
            </div>
            <div>
                <h1> {{$project->name}} </h1>
                <h3> {{$project->framework}} </h3>
                <h5> {{$project->languages}} </h5>
                <h5> {{$project->category}} </h5>
                <h5> {{$project->descrizione}} </h5>
            </div>
        </div>

    </div>
    

@endsection