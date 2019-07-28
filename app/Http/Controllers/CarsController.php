<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use Illuminate\Http\Request;
use App\Car;

class CarsController extends Controller
{
    public function index()
    {
        $take = request()->input('take', Car::get()->count());
        $skip = request()->input('skip', 0);

        if($skip && $take) {
            return Car::skip($skip)->take($take)->get();
        } else {
            return Car::all();
        }

        // return Car::all();
    }

    public function store(Request $request)
    {
        $car = new Car();

        $this->validate($request, Car::STORE_RULES);

        $car->brand = $request->input('brand');
        $car->model = $request->input('model');
        $car->year = $request->input('year');
        $car->maxSpeed = $request->input('maxSpeed');
        $car->isAutomatic = $request->input('isAutomatic');
        $car->engine = $request->input('engine');
        $car->numberOfDoors = $request->input('numberOfDoors');

        $car->save();

        return $car;
       
        // return Car::create($request->all());
    }

    public function show($id)
    {
        return Car::find($id);
    }

    public function update(CarRequest $request, $id)  //validacija preko requesta
    {
        // $this->validate(request(), Car::STORE_RULES);

        $car = Car::findOrFail($id);
        $car->update($request->all());
        return $car;
    }

    public function destroy($id)
    {
        Car::destroy($id);
        return response()->json('Car is deleted');
    }
}
