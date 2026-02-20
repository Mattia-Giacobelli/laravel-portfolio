@extends('layouts/admin')


@section('title')
    Projects
@endsection


@section('main')
    
    <div class="container  mt-5">

        <div class="d-flex justify-content-end">
            <a class="btn btn-primary" href="{{ route('admin.project.create')}}">Aggiungi un progetto</a>
        </div>

        <table class="table table-striped mt-4 w-100">
            <thead>
                {{-- <th></th> --}}
                <th scope="col">Nome</th>
                <th scope="col">Tipologia</th>
                <th scope="col">Categoria</th>
                <th scope="col">Tecnologie</th>
                <th scope="col">Linguaggi utilizzati</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </thead>

            <tbody >

                @foreach ($projects as $project)
                    {{-- {{$project->id}} --}}
                    <tr>
                        {{-- <td>
                            <img src="{{ Vite::asset($project['img']) }}" alt="scree">
                        </td> --}}

                        <td class="align-middle"><a href="{{route('admin.project', $project['id'])}}">{{$project['name']}}</a></td>
                        <td class="align-middle">{{$project->type_id != null ? $project->type->name : ''}}</td>
                        <td class="align-middle">{{$project['category']}}</td>
                        <td class="align-middle">
                            @for ($i = 0; $i < count($project->technologies); $i++)
                        
                            @if ($i == count($project->technologies) - 1)
                                {{ $project->technologies[$i]->name }}
                            @else
                                {{ $project->technologies[$i]->name }},
                            @endif

                    @endfor   </td>
                        <td class="align-middle">{{$project['languages']}}</td>

                        <td>
                            <a class="btn btn-outline-warning " href="{{ route('admin.project.edit', $project)}}">Modifica</a>
                        </td>

                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-danger " data-bs-toggle="modal" data-bs-target="#exampleModal{{ $project['id'] }}">
                                Elimina
                            </button>

                        </td>

                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{ $project['id'] }}" tabindex="-1" aria-labelledby="exampleModal{{ $project['id'] }}Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModal{{ $project['id'] }}Label">{{$project->name}}</h1>
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

                @endforeach

            </tbody>
        </table>

    </div> 

@endsection