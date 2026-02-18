@extends('layouts/admin')


@section('title')
    Projects
@endsection


@section('main')
    
    <div class="container">

        <table>
            <thead>
                {{-- <th></th> --}}
                <th>Nome</th>
                <th>Categoria</th>
                <th>Framework</th>
                <th>Linguaggi utilizzati</th>
                <th>Front-end</th>
                <th>Back-end</th>
            </thead>

            <tbody>

                @foreach ($projects as $project)
                    {{-- {{$project->id}} --}}
                    <tr>
                        {{-- <td>
                            <img src="{{ Vite::asset($project['img']) }}" alt="scree">
                        </td> --}}
                        <td><a href="{{route('admin.project', $project['id'])}}">{{$project['name']}}</a></td>
                        <td>{{$project['languages']}}</td>
                        <td>{{$project['framework']}}</td>
                        <td>{{$project['category']}}</td>
                        <td>{{$project['front_end']}}</td>
                        <td>{{$project['back_end']}}</td>
                    </tr>

                @endforeach

            </tbody>
        </table>
    </div> 

@endsection