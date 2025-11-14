<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>✏️ Editar Cliente</h1>
        
        <a href="{{ route('clients.index') }}" class="btn btn-secondary mb-3">↩️ Volver</a>

        <form action="{{ route('clients.update', $client->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre Completo *</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $client->name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $client->email }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="phone" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $client->phone }}">
                    </div>
                    <div class="mb-3">
                        <label for="company" class="form-label">Empresa</label>
                        <input type="text" class="form-control" id="company" name="company" value="{{ $client->company }}">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Dirección</label>
                <textarea class="form-control" id="address" name="address" rows="2">{{ $client->address }}</textarea>
            </div>
            <button type="submit" class="btn btn-warning">💾 Actualizar Cliente</button>
        </form>
    </div>
</body>
</html>