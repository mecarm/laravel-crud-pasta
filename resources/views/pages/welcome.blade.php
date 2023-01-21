@extends('layout.app')

@section('page-title', 'La Molisana -Welcome')

@section('main-content')
    <h1 class="text-center m-2">Benvenuto nel sito della Molisana</h1>
    <h3 class="text-center m-5">Scopri la nostra pasta</h3>
    <h5 class="text-center">Scorri e scopri la nostra pasta</h5>
    <div id="carouselExample" class="carousel slide mt-5">
        <div class="carousel-inner d-none">
            <div class="carousel-item active">
            </div
            @foreach ($pasta as $item)
            <div class="carousel-item">
                <h5 class="text-center pt-5 mt-4">{{$item->title}}</h5>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
@endsection