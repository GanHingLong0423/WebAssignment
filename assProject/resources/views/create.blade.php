<form method="POST" action="{{ route('seller.store') }}" enctype="multipart/form-data">
    @csrf
    <div>
    <label for="brand">Brand:</label>
    <select name="brand" required>
        <option value="">-- Select brand --</option>
        <option value="Proton">Proton</option>
        <option value="Perodua">Perodua</option>
        <option value="Honda">Honda</option>
    </select>
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
    <select name="yearOfManufacture" required>
        @for ($year = 2023; $year >= 1990; $year--)
            <option value="{{ $year }}">{{ $year }}</option>
        @endfor
    </select>
    </div>

    <div>
    <label for="engineCC">Engine CC:</label>
    <input type="text" name="engineCC" pattern="\d+(\.\d{1,2})?" min="0.1" max="99.9" placeholder="Enter engine CC between 0.1 to 99.9" required>
    </div>

   <div>
    <label for="price">Price:</label>
    <input type="number" name="price" min="0" step="0.01" placeholder="Enter price in RM" required>
    </div>

    <div>
    <label for="condition">Condition:</label>
    <input type="text" name="condition" required placeholder="Please describe the condition of the car">
    </div>

    <div>
    <label for="image">Image:</label>
    <input type="file" name="image" required>
    </div>

    <div>
        <input type="submit" value="Add Car">
    </div>
</form>
