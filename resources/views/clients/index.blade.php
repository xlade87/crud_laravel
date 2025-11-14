<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>👥 Lista de Clientes</h1>
        
        <a href="{{ route('clients.create') }}" class="btn btn-primary mb-3">➕ Nuevo Cliente</a>
        <a href="{{ route('home') }}" class="btn btn-secondary mb-3">🏠 Inicio</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Empresa</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone ?? 'No especificado' }}</td>
                    <td>{{ $client->company ?? 'No especificada' }}</td>
                    <td>
                        <a href="{{ route('clients.show', $client->id) }}" class="btn btn-info btn-sm">👁️ Ver</a>
                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning btn-sm">✏️ Editar</a>
                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar cliente?')">🗑️ Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>