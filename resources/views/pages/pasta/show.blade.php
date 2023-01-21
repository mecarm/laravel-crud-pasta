@extends('layout.app')

@section('page-title')
Pasta - {{$elem->title}}
@endsection

@section('main-content')
<h1 class="text-center">{{$elem->title}}</h1>
<div class="w-50 m-auto pt-4">
    <p>
        {!!$elem->description!!}
    </p>
</div>
@endsection