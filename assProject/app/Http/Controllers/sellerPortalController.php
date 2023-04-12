<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;



class SellerPortalController extends Controller
{
    public function showListings()
    {
        $user_id = auth()->user()->id;
        $cars = Car::where('user_id',$user_id)->get();

        return view('sellerPortal', ['cars' => $cars]);
    }

    public function destroy(Car $car)
{
    $car->delete();
    return redirect()->route('seller.dashboard')->with('success', 'Car deleted successfully');
}

public function store(Request $request)
{
    $request->validate([
        'brand' => 'required|string',
        'model' => 'required|string',
        'variant' => 'required|string',
        'color' => 'required|string',
        'plateNumber' => 'required|string',
        'yearOfManufacture' => 'required|integer',
        'engineCC' => 'required|string',
        'price' => 'required|string',
        'condition' => 'required|string',
        'filename' => 'required|string',
        'file_path' => 'required|string',
    ]);

    $car = new Car();
    $car->brand = $request->input('brand');
    $car->model = $request->input('model');
    $car->variant = $request->input('variant');
    $car->color = $request->input('color');
    $car->plateNumber = $request->input('plateNumber');
    $car->yearOfManufacture = $request->input('yearOfManufacture');
    $car->engineCC = $request->input('engineCC');
    $car->price = $request->input('price');
    $car->condition = $request->input('condition');
    $car->user_id = auth()->user()->id;
    $car->filename = $request->input('filename');
    $car->file_path = $request->input('file_path');
    $car->save();

    return redirect()->route('seller.dashboard');
}

public function create()
{
    return view('create')->with('success', 'Car listed successfully.');
}

public function edit($id)
{
    $car = Car::find($id);
    return view('update', compact('car'));
}

public function update(Request $request, $id)
{
    $car = Car::find($id);
    $car->brand = $request->input('brand');
    $car->model = $request->input('model');
    $car->variant = $request->input('variant');
    $car->color = $request->input('color');
    $car->yearOfManufacture = $request->input('yearOfManufacture');
    $car->engineCC = $request->input('engineCC');
    $car->price = $request->input('price');
    $car->condition = $request->input('condition');
    $car->save();

    return redirect()->route('seller.dashboard')->with('success', 'Car listing updated successfully.');
}



}
