<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class sellerPortalController extends Controller
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
        'engineCC' => ['required', 'regex:/^\d+(\.\d+)?$/', 'between:1.0,99.9'],
        'price' => ['required', 'regex:/^\d+(\.\d{1,2})?$/', 'between:1,9999999'],
        'condition' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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

    // Save the uploaded image
    $image = $request->file('image');
    $name = time() . '_' . $image->getClientOriginalName();
    $filePath = $image->storeAs('img', $name, 'public');
    

    $car->filename = $name;
    $car->file_path = '/storage/' . $filePath;

    $car->save();

    return redirect()->route('seller.dashboard');
}



public function create()
{
    return view('create')->with('success', 'Car listed successfully.');;
}

public function edit($id)
{
    $car = Car::findOrFail($id);
    return view('update', compact('car'));
}

public function update(Request $request, $id)
{
    $car = Car::findOrFail($id);
    $car->brand = $request->input('brand');
    $car->model = $request->input('model');
    $car->variant = $request->input('variant');
    $car->color = $request->input('color');
    $car->yearOfManufacture = $request->input('yearOfManufacture');
    $car->engineCC = $request->input('engineCC');
    $car->price = $request->input('price');
    $car->condition = $request->input('condition');

    if ($request->has('image')) {
        // Delete old image file
        Storage::delete($car->filename);
        // Store new image file
        $image = $request->file('image');
        $name = time() . '_' . $image->getClientOriginalName();
        $filePath = $image->storeAs('public/img', $name);
        $car->filename = $name;
        $car->file_path = '/storage/img/' . $name;
    }

    $car->save();

    return redirect()->route('seller.dashboard')->with('success', 'Car listing updated successfully.');
}

}
