<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller{
    //methods you add here - action methods http methods
    public function allCars(){
        //enables reaading all cars from the databse
        $cars = Car::all();
        return view('cars', [
            'cars' => $cars
        ]);
    }

    public function particularCar($id){
        $car = Car::find($id);// select * cars where id=$id
        return view('car', [
            'car' => $car
        ]);
    }

    public function newCar(){
        $car = new Car;
        $car->make = request('make');
        $car->model = request('model');
        $car->produced_on = request('produced_on');
        $car->save();
        return redirect('carForm');
        //return view('carForm');
    }

    public function carForm(){
        return view('carForm');
    }


}
