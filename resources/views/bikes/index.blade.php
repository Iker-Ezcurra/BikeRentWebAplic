@extends('layouts.app')

@section('body-class', 'bike-page')

@section('content')

<div>

    <h1 class="title">Listado de bicicletas</h1>

    <!-- Filtros -->
    <div class="filtros">

        <select id="filtroDisponibilidad">
            <option value="todas">Todas las bicicletas</option>
            <option value="disponible">Disponibles</option>
            <option value="no-disponible">No disponibles</option>
        </select>

        <button id="ordenarPrecio">
            Ordenar por precio ↑
        </button>

    </div>

    {{-- Listado --}}
    <div class="bike__contenedor" id="lista-bicicletas">

        @include('bikes.lista')

    </div>

</div>

@endsection