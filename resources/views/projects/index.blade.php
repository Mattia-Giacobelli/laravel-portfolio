@extends('layouts/admin')


@section('title')
    Projects
@endsection


@section('main')
    
    <div class="container  mt-5">

        <a href="{{ route('admin.project.create')}}">Aggiungi un progetto</a>

        <table class="table table-striped mt-4 w-100">
            <thead>
                {{-- <th></th> --}}
                <th scope="col">Nome</th>
                <th scope="col">Categoria</th>
                <th scope="col">Framework</th>
                <th scope="col">Linguaggi utilizzati</th>
                <th scope="col">Front-end</th>
                <th scope="col">Back-end</th>
            </thead>

            <tbody >

                @foreach ($projects as $project)
                    {{-- {{$project->id}} --}}
                    <tr>
                        {{-- <td>
                            <img src="{{ Vite::asset($project['img']) }}" alt="scree">
                        </td> --}}

                        <td><a href="{{route('admin.project', $project['id'])}}">{{$project['name']}}</a></td>
                        <td>{{$project['category']}}</td>
                        <td>{{$project['framework']}}</td>
                        <td>{{$project['languages']}}</td>

                        @if ($project['front_end'] == 1)
                            <td>Sì</td>
                        @else
                            <td>No</td>
                        @endif

                        @if ($project['back_end'] == 1)
                            <td>Sì</td>
                        @else
                            <td>No</td>
                        @endif

                    </tr>

                @endforeach

            </tbody>
        </table>
    </div> 

@endsection