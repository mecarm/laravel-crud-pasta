@extends('layout.app')

@section('page-title', 'La Molisana -Welcome')

@section('main-content')
    <h1 class="text-center m-2">Benvenuto nel sito della Molisana</h1>
    <h3 class="text-center m-5">Scopri la nostra pasta</h3>
      @foreach ($pasta as $item)
        <div class="card m-5">
          <div class="card-body">
            <h5 class="card-title">{{ $item->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $item->cooking_time }}</h6>
            <p class="card-text">{!! $item->description !!}</p>
            <a href="{{route('pastas.index')}}" class="card-link">Visualizza elenco completo</a>
          </div>
        </div>

      @endforeach
@endsection