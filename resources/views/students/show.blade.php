<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>👨‍🎓 Información del Estudiante</h1>
        
        <a href="{{ route('students.index') }}" class="btn btn-secondary mb-3">↩️ Volver</a>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>ID:</strong> {{ $student->id }}</p>
                        <p><strong>Código:</strong> {{ $student->student_code }}</p>
                        <p><strong>Nombre:</strong> {{ $student->first_name }} {{ $student->last_name }}</p>
                        <p><strong>Email:</strong> {{ $student->email }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Teléfono:</strong> {{ $student->phone ?? 'No especificado' }}</p>
                        <p><strong>Carrera:</strong> {{ $student->career }}</p>
                        <p><strong>Año de ingreso:</strong> {{ $student->enrollment_year }}</p>
                        <p><strong>Dirección:</strong> {{ $student->address ?? 'No especificada' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">✏️ Editar</a>
            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Eliminar estudiante?')">🗑️ Eliminar</button>
            </form>
        </div>
    </div>
</body>
</html>