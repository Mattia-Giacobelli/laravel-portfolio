@extends('layouts/admin')


@section('title')
    Aggiungi un progetto
@endsection


@section('main')

    <div class="container mt-5">

        <form action="{{ route('admin.project.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nome del Progetto</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="languages" class="form-label">Linguaggi utilizzati</label>
                <input type="text" class="form-control" id="languages" name="languages">
            </div>
            {{-- <div class="mb-3">
                <label for="framework" class="form-label">Framework utilizzati</label>
                <input type="text" class="form-control" id="framework" name="framework">
            </div> --}}
            <div class="mb-3">
                <label for="category" class="form-label">Categoria</label>
                <input class="form-control" id="category" name="category">
            </div>
            <div class="mb-3">
                <label for="type_id" class="form-label">Tipologia</label>
                <select class="form-select" id="type_id" name="type_id"> 

                    @foreach ($types as $type)
                        
                        <option value="{{ $type->id }}"> {{ $type->name }} </option>

                    @endforeach
                    
                </select>
            </div>

            {{-- @dd($technologies) --}}

            <span class="d-block mb-2">Tecnologie</span>
            
            @foreach ($technologies as $tech)
            
                <div class="form-check form-check-inline mb-3">
                    <input name="technologies[]" value="{{ $tech->id }}" class="form-check-input" type="checkbox" id="tech{{ $tech->id }}">
                    <label class="form-check-label" for="tech{{ $tech->id }}"> {{ $tech->name }} </label>
                </div>

            @endforeach


            <div class="mb-3">
                <label for="img" class="form-label">Percorso dell'immagine</label>
                <input type="text" class="form-control" id="img" name="img">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione in inglese</label>
                <textarea class="form-control" id="description" name="description"> </textarea>
            </div>
            <div class="mb-3">
                <label for="descrizione" class="form-label">Descrizione in italiano</label>
                <textarea class="form-control" id="descrizione" name="descrizione"> </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

@endsection