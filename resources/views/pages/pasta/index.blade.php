@extends('layout.app')

@section('page-title', 'Lista Pasta')

@section('font-awesome')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main-content')

    @if ( session('success') )
        <div class="m-5">
            <div class="alert alert-success w-25 m-auto">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <h1 class="text-center">La lista della Pasta</h1>

    <table class="table table-bordered mt-3 m-auto" style="width: 80%">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">TITLE</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">TYPE</th>
                <th scope="col">IMAGE</th>
                <th scope="col">COOKING_TIME</th>
                <th scope="col">WEIGHT</th>
                <th scope="col">ACTIONS</th>
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
                     <td class="d-flex">
                        <form action="{{route('pastas.destroy', $elem->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                        <div class=" ms-1 btn btn-primary">
                            <a class="text-light" href="{{route('pastas.edit', $elem->id)}}">
                                 <i class="fa-solid fa-pen"></i>
                            </a>
                        </div>
                     </td>
                </tr>
            @endforeach
    
        </tbody>
    </table>
    
    <div class="d-flex justify-content-center align-items-center m-3">
        {{ $pastas->links() }}
    </div>

@endsection