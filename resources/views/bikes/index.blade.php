<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de bicicletas</title>
</head>
<body>

    <h1>Listado de bicicletas</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Modelo</th>
                <th>Precio por hora</th>
                <th>Número de serie</th>
                <th>Estado</th>
            </tr>
        </thead>

        <tbody>
            @foreach($bikes as $bike)
                <tr>
                    <td>{{ $bike->id }}</td>
                    <td>{{ $bike->model }}</td>
                    <td>{{ $bike->price_per_hour }}</td>
                    <td>{{ $bike->serial_number }}</td>
                    <td>{{ $bike->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>