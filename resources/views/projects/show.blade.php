@extends('layouts/admin')


@section('title')
    {{$project->name}}
@endsection


@section('main')
    
    <div class="container mt-4">

        {{-- @dd($project) --}}
        <div class="card d-flex">
            <div class="card-img-top">
                <img src="{{ asset('storage/' . $project->img) }}" alt="site preview" width="600px">
            </div>
            <div class="p-3">
                <div class="d-flex justify-content-between">
                    
                    <h1> {{$project->name}} </h1>

                    <h2> {{$project->type->name}} </h2>
                    {{-- @dd($project) --}}
                    
                </div>

                <h3> Categoria: {{$project->category}}</h3>
                <h3> Tecnologie utilizzate: 
                    @for ($i = 0; $i < count($project->technologies); $i++)
                        
                        @if ($i == count($project->technologies) - 1)
                            {{ $project->technologies[$i]->name }}
                        @else
                            {{ $project->technologies[$i]->name }},
                        @endif

                    @endfor    
                </h3>
                <h5> Linguaggi: {{$project->languages}} </h5>
                <h5 class="mt-5"> {{$project->descrizione}} </h5>
            </div>
        </div>

    </div>
    

@endsection