<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>👨‍💼 Lista de Empleados</h1>
        
        <a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">➕ Nuevo Empleado</a>
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
                    <th>Puesto</th>
                    <th>Salario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>${{ number_format($employee->salary, 2) }}</td>
                    <td>
                        <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info btn-sm">👁️ Ver</a>
                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning btn-sm">✏️ Editar</a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar empleado?')">🗑️ Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>