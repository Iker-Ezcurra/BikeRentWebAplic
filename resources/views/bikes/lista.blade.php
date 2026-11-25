@forelse($bikes as $bike)

    <div class="bike__card card-hover">

        <img src="{{ asset('storage/' . $bike->imagen) }}"
             alt="{{ $bike->name }}">

        <h2>{{ $bike->model }}</h2>

        <p>
            <strong>Número de serie:</strong>
            {{ $bike->serial_number }}
        </p>

        <p>
            {{ number_format($bike->price_per_hour, 2) }} €/hora
        </p>

        <a href="{{ route('bikes.show', $bike->id) }}">
            Ver información
        </a>

        @if($bike->status == 'maintenance')
            <div class="maintenance-badge">
                <p>En mantenimiento</p>
            </div>
        @endif

    </div>

@empty

    <p>No hay bicicletas disponibles.</p>

@endforelse