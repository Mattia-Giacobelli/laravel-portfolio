@extends('layouts/admin')


@section('title')
    Types
@endsection


@section('main')
    
    <div class="container  mt-5">

        <div class="d-flex justify-content-end">
            <a class="btn btn-primary" href="{{ route('admin.type.create')}}">Aggiungi un progetto</a>
        </div>

        <table class="table table-striped mt-4 w-100">
            <thead>
                {{-- <th></th> --}}
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th></th>
                <th></th>

            </thead>

            <tbody >

                @foreach ($types as $type)
                    {{-- {{$type->id}} --}}
                    <tr>
                        {{-- <td>
                            <img src="{{ Vite::asset($type['img']) }}" alt="scree">
                        </td> --}}

                        <td class="align-middle">{{$type['id']}}</td>
                        <td class="align-middle"><a href="{{route('admin.type', $type['id'])}}">{{$type['name']}}</a></td>

                        <td>
                            <a class="btn btn-outline-warning " href="{{ route('admin.type.edit', $type)}}">Modifica</a>
                        </td>

                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-danger " data-bs-toggle="modal" data-bs-target="#exampleModal{{ $type->id }}">
                                Elimina
                            </button>

                        </td>

                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{ $type->id }}" tabindex="-1" aria-labelledby="exampleModal{{ $type->id }}Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModal{{ $type->id }}Label">{{$type->name}}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Elimina la Tipologia
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
            
                                    <form action="{{ route('admin.type.destroy', $type)}}" method="POST">
            
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