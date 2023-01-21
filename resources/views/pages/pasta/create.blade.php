@extends('layout.app')

@section('page-title', 'Aggiungi Pasta')

@section('main-content')

<h1 class="text-center m-5">Aggiungi pasta</h1>
    
<form class="w-50 m-auto" method="POST" action="{{route('pastas.store')}}">

    @csrf

    <div class="mb-3">
        <label class="form-label">Titolo</label>
        <input name="title" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <textarea name="description" class="form-control" id=""></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Tipo</label>
        <input name="type" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">immagine</label>
        <input name="image" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Tempo di cottura</label>
        <input name="cooking_time" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Peso</label>
        <input name="weight" type="text" class="form-control" id="title">
    </div>

    <button type="submit" class="btn btn-primary">Crea Pasta</button>
</form>

@endsection

