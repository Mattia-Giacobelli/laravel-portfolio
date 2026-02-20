@extends('layouts/admin')


@section('title')
    Aggiungi una Tecnologia
@endsection


@section('main')

    <div class="container mt-5">

        <form action="{{ route('admin.technology.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

@endsection