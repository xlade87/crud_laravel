<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>👨‍🎓 Crear Nuevo Estudiante</h1>
        
        <a href="{{ route('students.index') }}" class="btn btn-secondary mb-3">↩️ Volver</a>

        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="student_code" class="form-label">Código Estudiante *</label>
                        <input type="text" class="form-control" id="student_code" name="student_code" required>
                    </div>
                    <div class="mb-3">
                        <label for="first_name" class="form-label">Nombre *</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Apellido *</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="career" class="form-label">Carrera *</label>
                        <input type="text" class="form-control" id="career" name="career" required>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Dirección</label>
                <textarea class="form-control" id="address" name="address" rows="2"></textarea>
            </div>
            <div class="mb-3">
                <label for="enrollment_year" class="form-label">Año de Ingreso *</label>
                <input type="number" class="form-control" id="enrollment_year" name="enrollment_year" 
                value="{{ date('Y') }}" min="1900" max="{{ date('Y') + 1 }}" required>
            </div>
            <button type="submit" class="btn btn-success">💾 Guardar Estudiante</button>
        </form>
    </div>
</body>
</html>