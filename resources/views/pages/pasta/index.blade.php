@extends('layout.app')

@section('page-title', 'Lista Pasta')

@section('main-content')
    <h1 class="text-center">La lista della Pasta</h1>

    <table class="table table-bordered mt-3 m-auto" style="width: 80%">
        <thead>
            <tr>
                <th scope="col">#id</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">type</th>
                <th scope="col">image</th>
                <th scope="col">cooking_time</th>
                <th scope="col">weight</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pastas as $elem)
                <tr>
                    <td>{{$elem->id}}</td>
                    <td>
                        <a href="{{route('pastas.show', $elem->id )}}">
                            {{$elem->title}}
                        </a>
                    </td>
                    <td>{!!$elem->description!!}</td>
                    <td>{{$elem->type}}</td>
                    <td>{{$elem->image}}</td>
                    <td>{{$elem->cooking_time}}</td>
                    <td>{{$elem->weight}}</td>
                     <td>Action</td>
                </tr>
            @endforeach
    
        </tbody>
    </table>
    
    <div class="d-flex justify-content-center align-items-center m-3">
        {{ $pastas->links() }}
    </div>

@endsection