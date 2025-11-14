<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistema CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .stats-card {
            border: none;
            border-radius: 10px;
        }
        .module-card {
            border: none;
            border-radius: 10px;
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <!-- Título -->
        <div class="text-center mb-5">
            <h1 class="display-4">🏠 Sistema CRUD</h1>
            <p class="lead">Panel de control principal</p>
        </div>
        
        <!-- Estadísticas -->
        <div class="row mb-5">
            <div class="col-md-3 mb-3">
                <div class="card stats-card bg-primary text-white">
                    <div class="card-body text-center">
                        <h1 class="display-4">{{ $stats['students'] }}</h1>
                        <h5>👨‍🎓 Estudiantes</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card stats-card bg-success text-white">
                    <div class="card-body text-center">
                        <h1 class="display-4">{{ $stats['products'] }}</h1>
                        <h5>📦 Productos</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card stats-card bg-warning text-white">
                    <div class="card-body text-center">
                        <h1 class="display-4">{{ $stats['employees'] }}</h1>
                        <h5>👨‍💼 Empleados</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card stats-card bg-info text-white">
                    <div class="card-body text-center">
                        <h1 class="display-4">{{ $stats['clients'] }}</h1>
                        <h5>👥 Clientes</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Módulos del sistema -->
        <div class="row">
            <!-- Estudiantes -->
            <div class="col-md-3 mb-4">
                <div class="card module-card shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <span style="font-size: 3rem;">👨‍🎓</span>
                        </div>
                        <h4 class="card-title">Estudiantes</h4>
                        <p class="card-text">Gestionar registro de estudiantes</p>
                        <a href="{{ route('students.index') }}" class="btn btn-primary btn-lg">
                            Administrar
                        </a>
                    </div>
                </div>
            </div>

            <!-- Productos -->
            <div class="col-md-3 mb-4">
                <div class="card module-card shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <span style="font-size: 3rem;">📦</span>
                        </div>
                        <h4 class="card-title">Productos</h4>
                        <p class="card-text">Gestionar catálogo de productos</p>
                        <a href="{{ route('products.index') }}" class="btn btn-success btn-lg">
                            Administrar
                        </a>
                    </div>
                </div>
            </div>

            <!-- Empleados -->
            <div class="col-md-3 mb-4">
                <div class="card module-card shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <span style="font-size: 3rem;">👨‍💼</span>
                        </div>
                        <h4 class="card-title">Empleados</h4>
                        <p class="card-text">Gestionar personal empleado</p>
                        <a href="{{ route('employees.index') }}" class="btn btn-warning btn-lg">
                            Administrar
                        </a>
                    </div>
                </div>
            </div>

            <!-- Clientes -->
            <div class="col-md-3 mb-4">
                <div class="card module-card shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <span style="font-size: 3rem;">👥</span>
                        </div>
                        <h4 class="card-title">Clientes</h4>
                        <p class="card-text">Gestionar base de clientes</p>
                        <a href="{{ route('clients.index') }}" class="btn btn-info btn-lg">
                            Administrar
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Información del sistema -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body text-center">
                        <small class="text-muted">
                            Sistema desarrollado con Laravel | Total registros: 
                            {{ array_sum($stats) }}
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>