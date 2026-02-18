@extends('layouts/admin')


@section('title')
    Project
@endsection


@section('main')
    
    <div class="container mt-4">

        {{-- @dd($project) --}}
        <div class="card d-flex">
            <div class="card-img-top">
                <img src="{{Vite::asset($project->img)}}" alt="site preview" width="600px">
            </div>
            <div class="p-3">
                <div class="d-flex justify-content-between">

                    <h1> {{$project->name}} </h1>
                    <h2> {{$project->category}} </h2>

                </div>
                <h3> Ramework utilizzati: {{$project->framework}} </h3>
                <h5> Linguaggi: {{$project->languages}} </h5>
                <h5 class="mt-5"> {{$project->descrizione}} </h5>
            </div>
        </div>

    </div>
    

@endsection