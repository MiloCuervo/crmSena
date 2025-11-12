@extends('layouts.layout')
@section('content')
    

    <h1>Lista de Casos</h1>
    <ul class="list-group zindex-dropdown:1000 border border-secondary rounded col-md-6">
        @foreach ($casos as $caso)
            <li class="list-group-item list-group-item-action list-group-item-primary"><a
                    href="/Casos/{{ $caso->id }}">{{ $caso->titulo }}</a></li>
        @endforeach
    </ul>
@endsection
