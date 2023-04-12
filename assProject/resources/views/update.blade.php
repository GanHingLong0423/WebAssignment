<form action="{{ route('seller.update', $car->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div>
        <label for="brand">Brand:</label>
        <select name="brand" required>
            <option value="">-- Select brand --</option>
            <option value="Proton" {{ $car['brand'] == 'Proton' || $car['brand'] == 'proton' ? 'selected' : '' }}>Proton</option>
            <option value="Perodua" {{ $car['brand'] == 'Perodua' || $car['brand'] == 'perodua' ? 'selected' : '' }}>Perodua</option>
            <option value="Honda" {{ $car['brand'] == 'Honda'|| $car['brand'] == 'honda' ? 'selected' : '' }}>Honda</option>
        </select>

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
        <select name="yearOfManufacture" required>
            @for ($year = 2023; $year >= 1990; $year--)
            <option value="{{ $year }}" {{ $car['yearOfManufacture'] == $year ? 'selected' : '' }}>{{ $year }}</option>
            @endfor
        </select>
    </div>
    <div>
        <label for="engineCC">Engine CC:</label>
        <input type="text" name="engineCC" value="{{ $car->engineCC }}" pattern="\d+(\.\d{1,2})?" min="0.1" max="99.9" placeholder="Enter engine CC between 0.1 to 99.9" required>
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="number" name="price" value="{{ $car->price }}" min="0" step="0.01" placeholder="Enter price in RM" required>
    </div>
    <div>
        <label for="condition">Condition:</label>
        <input type="text" name="condition" value="{{ $car->condition }}" required placeholder="Please describe the condition of the car">
    </div>
    <div>
        <label for="image">Image:</label>
        <input type="file" name="image" required>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>