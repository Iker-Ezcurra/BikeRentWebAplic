@forelse($bikes as $bike)

    <div class="bike__card">

        <h2>{{ $bike->model }}</h2>

        <p>
            <strong>Número de serie:</strong>
            {{ $bike->serial_number }}
        </p>

        <p>
            {{ number_format($bike->price_per_hour, 2) }} €/hora
        </p>

        <p>
            <strong>Estado:</strong>
            {{ ucfirst($bike->status) }}
        </p>

        <a href="{{ route('bikes.show', $bike->id) }}">
            Ver información
        </a>

    </div>

@empty

    <p>No hay bicicletas disponibles.</p>

@endforelse