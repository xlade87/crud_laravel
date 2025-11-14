<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Client;
use App\Models\Employee;
use App\Models\Student;

class HomeController extends Controller
{
    /**
     * Display the home page with access to all CRUDs
     */
    public function index()
    {
        // Obtener estadísticas de cada módulo
        $stats = [
            'products' => Product::count(),
            'clients' => Client::count(),
            'employees' => Employee::count(),
            'students' => Student::count(),
        ];

        return view('home.index', compact('stats'));
    }
}