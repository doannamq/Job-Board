<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function carIndex()
    {
        return view('cars.index', [
            'cars' => Car::all()
        ]);
    }

    public function showCar(Car $car)
    {
        return view('cars.show', [
            'car' => $car
        ]);
    }
}
