<form method="POST" action="{{ route('seller.store') }}">
    @csrf
    <div>
        <label for="brand">Brand:</label>
        <input type="text" name="brand" required>
    </div>
    <div>
        <label for="model">Model:</label>
        <input type="text" name="model" required>
    </div>
    <div>
        <label for="variant">Variant:</label>
        <input type="text" name="variant" required>
    </div>
    <div>
        <label for="color">Color:</label>
        <input type="text" name="color" required>
    </div>
    <div>
        <label for="plateNumber">Plate Number:</label>
        <input type="text" name="plateNumber" required>
    </div>
    <div>
        <label for="yearOfManufacture">Year of Manufacture:</label>
        <input type="number" name="yearOfManufacture" required>
    </div>
    <div>
        <label for="engineCC">Engine CC:</label>
        <input type="text" name="engineCC" required>
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="text" name="price" required>
    </div>
    <div>
        <label for="condition">Condition:</label>
        <input type="text" name="condition" required>
    </div>
    
    <div>
        <label for="url">URL:</label>
        <input type="text" name="url" required>
    </div>
    <div>

        <input type="submit" value="Add Car">
    </div>
</form>
