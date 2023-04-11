<form action="{{ route('seller.update', $car->id) }}" method="POST">
    @csrf
    @method('POST')
    <div>
        <label for="brand">Brand:</label>
        <input type="text" name="brand" value="{{ $car->brand }}">
    </div>
    <div>
        <label for="model">Model:</label>
        <input type="text" name="model" value="{{ $car->model }}">
    </div>
    <div>
        <label for="variant">Variant:</label>
        <input type="text" name="variant" value="{{ $car->variant }}">
    </div>
    <div>
        <label for="color">Color:</label>
        <input type="text" name="color" value="{{ $car->color }}">
    </div>
    <div>
        <label for="yearOfManufacture">Year of Manufacture:</label>
        <input type="text" name="yearOfManufacture" value="{{ $car->yearOfManufacture }}">
    </div>
    <div>
        <label for="engineCC">Engine CC:</label>
        <input type="text" name="engineCC" value="{{ $car->engineCC }}">
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="text" name="price" value="{{ $car->price }}">
    </div>
    <div>
        <label for="condition">Condition:</label>
        <input type="text" name="condition" value="{{ $car->condition }}">
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
