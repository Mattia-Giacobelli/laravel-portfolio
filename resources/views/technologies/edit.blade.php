@extends('layouts/admin')


@section('title')
    Modifica una Tecnologia
@endsection


@section('main')

    <div class="container mt-5">

        <form action="{{ route('admin.technology.update', $technology) }}" method="POST">

            @csrf

            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$technology->name}}">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

@endsection