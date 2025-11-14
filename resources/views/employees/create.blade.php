<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>👨‍💼 Crear Nuevo Empleado</h1>
        
        <a href="{{ route('employees.index') }}" class="btn btn-secondary mb-3">↩️ Volver</a>

        <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre Completo *</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="position" class="form-label">Puesto *</label>
                        <input type="text" class="form-control" id="position" name="position" required>
                    </div>
                    <div class="mb-3">
                        <label for="salary" class="form-label">Salario *</label>
                        <input type="number" step="0.01" class="form-control" id="salary" name="salary" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">💾 Guardar Empleado</button>
        </form>
    </div>
</body>
</html>