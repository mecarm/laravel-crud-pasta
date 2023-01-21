@extends('layout.app')

@section('page-title', 'Aggiungi Pasta')

@section('main-content')

<h1 class="text-center m-5">Modifica pasta</h1>


<form class="w-50 m-auto" method="POST" action="{{route('pastas.update', $pasta->id)}}">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Titolo</label>
        <input value="{{ $pasta->title }}" name="title" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <textarea name="description" class="form-control" id="">{{ $pasta->description }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Tipo</label>
        <input  value="{{ $pasta->type }}" name="type" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">immagine</label>
        <input value="{{ $pasta->image }}" name="image" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Tempo di cottura</label>
        <input value="{{ $pasta->cooking_time }}" name="cooking_time" type="text" class="form-control" id="title">
    </div>

    <div class="mb-3">
        <label class="form-label">Peso</label>
        <input value="{{ $pasta->weight }}" name="weight" type="text" class="form-control" id="title">
    </div>

    <button type="submit" class="btn btn-primary">Crea Pasta</button>
</form>

@endsection

