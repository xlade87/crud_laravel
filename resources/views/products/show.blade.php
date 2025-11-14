<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>📦 Información del Producto</h1>
        
        <a href="{{ route('products.index') }}" class="btn btn-secondary mb-3">↩️ Volver</a>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>ID:</strong> {{ $product->id }}</p>
                        <p><strong>Nombre:</strong> {{ $product->name }}</p>
                        <p><strong>Precio:</strong> ${{ number_format($product->price, 2) }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Descripción:</strong></p>
                        <p>{{ $product->description ?? 'Sin descripción' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">✏️ Editar</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Eliminar producto?')">🗑️ Eliminar</button>
            </form>
        </div>
    </div>
</body>
</html>