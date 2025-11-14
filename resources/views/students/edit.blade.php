<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>✏️ Editar Estudiante</h1>
        
        <a href="{{ route('students.index') }}" class="btn btn-secondary mb-3">↩️ Volver</a>

        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="student_code" class="form-label">Código Estudiante *</label>
                        <input type="text" class="form-control" id="student_code" name="student_code" value="{{ $student->student_code }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="first_name" class="form-label">Nombre *</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $student->first_name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Apellido *</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $student->last_name }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $student->phone }}">
                    </div>
                    <div class="mb-3">
                        <label for="career" class="form-label">Carrera *</label>
                        <input type="text" class="form-control" id="career" name="career" value="{{ $student->career }}" required>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Dirección</label>
                <textarea class="form-control" id="address" name="address" rows="2">{{ $student->address }}</textarea>
            </div>
            <button type="submit" class="btn btn-warning">💾 Actualizar Estudiante</button>
        </form>
    </div>
</body>
</html>