@extends('layout.app')

@section('page-title')
Pasta - {{$elem->title}}
@endsection

@section('main-content')

    @if ( session('success'))
    <div class="m-5">
        <div class="alert alert-success w-25 m-auto">
            {{ session('success') }}
        </div>
    </div>
    @endif

<h1 class="text-center">{{$elem->title}}</h1>
<div class="w-50 m-auto pt-4">
    <p>
        {!!$elem->description!!}
    </p>
    <p>Il tempo di cottura della pasta è : {{$elem->cooking_time}}</p>
</div>
@endsection