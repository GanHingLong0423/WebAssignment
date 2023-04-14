<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<head>
	<title>New Car Listing</title>
</head>
<section>
    @include('components.header')
</section>
<section style="background-color: #eee;">
    <div class="text-center container py-1">
        <h1 class="mt-4 mb-5"><strong>Add New Car</strong></h1>
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
                <input type="text" name="plateNumber" 
                required>
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
            <div><small>Image must be in .jpg, .jpeg, .png format and less than 2MB</small></div>
            <br>
            <div>
                <button style= "font-size: 20px;" type="submit" class="btn btn-primary">Add Car</button>
            </div>
            <a href="{{ url()->previous() }}" class="btn btn-default">Go Back</a>
        </form>
    </div>
</section>
@include('components.footer')
<style>
    div {
        font-size:20px;
    }

    label {
        width: 20%;
        margin: 10px;
        text-align: right;
    }
    
    input, select {
        width: 30%;
    }
</style>
