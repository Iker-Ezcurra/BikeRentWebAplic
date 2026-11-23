@extends('layouts.app')

@section('body-class', 'bike-page')

@section('content')

<div>

    <h1 class="bike__title">Listado de bicicletas</h1>

    {{-- Buscador --}}
    <div class="bike__buscador">

        <input
            type="text"
            id="buscador"
            placeholder="Buscar bicicleta..."
        >

    </div>

    {{-- Listado --}}
    <div class="bike__contenedor" id="lista-bicicletas">

        @include('bikes.lista')

    </div>

</div>

@endsection