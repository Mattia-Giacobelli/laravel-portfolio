@extends('layouts/admin')


@section('title')
    {{$project->name}}
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

                    <div>
                        <h2> {{$project->category}} </h2>
                        {{-- @dd($project) --}}

                        <a class="btn btn-outline-warning " href="{{ route('admin.project.edit', $project)}}">Modifica</a>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-danger " data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Elimina
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">$project->name</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Elimina il progetto
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>

                                <form action="{{ route('admin.project.destroy', $project)}}" method="POST">

                                    @csrf

                                    @method('DELETE')


                                    <button type="submit" class="btn btn-danger">Elimina</button>
                                </form>
                                
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    

                </div>
                <h3> Framework utilizzati: {{$project->framework}} </h3>
                <h5> Linguaggi: {{$project->languages}} </h5>
                <h5 class="mt-5"> {{$project->descrizione}} </h5>
            </div>
        </div>

    </div>
    

@endsection