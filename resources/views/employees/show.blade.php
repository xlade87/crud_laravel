<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>👨‍💼 Información del Empleado</h1>
        
        <a href="{{ route('employees.index') }}" class="btn btn-secondary mb-3">↩️ Volver</a>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>ID:</strong> {{ $employee->id }}</p>
                        <p><strong>Nombre:</strong> {{ $employee->name }}</p>
                        <p><strong>Email:</strong> {{ $employee->email }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Puesto:</strong> {{ $employee->position }}</p>
                        <p><strong>Salario:</strong> ${{ number_format($employee->salary, 2) }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">✏️ Editar</a>
            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Eliminar empleado?')">🗑️ Eliminar</button>
            </form>
        </div>
    </div>
</body>
</html>