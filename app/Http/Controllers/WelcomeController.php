<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Vehiculo;
use App\Models\Propietario;
use App\Models\Marca;
use App\Models\Tipovehiculo;

class WelcomeController extends Controller
{
    public function index()
    {
		$vehiculos = Http::get('http://localhost/parqueadero4ruedas/public/api/vehiculos');
		$vehiculosArray = $vehiculos->json();
		//dd($vehiculosArray);
        return view('welcome', compact('vehiculosArray'));
    }
	
	
}
