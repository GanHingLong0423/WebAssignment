<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<head>
	<title>New Car Listing</title>
</head>

<section style="background-color: #eee;">
    <div class="text-center container py-5">
        <h1 class="mt-4 mb-5"><strong>Add New Listing</strong></h1>
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
                <label for="filename">File Name:</label>
                <input type="text" name="filename" required>
            </div>
            <div>
                <label for="file_path">File Path:</label>
                <input type="text" name="file_path" required>
            </div>
            <br>
            <div>
                <button style= "font-size: 20px;" type="submit" class="btn btn-primary">Add Car</button>
            </div>
        </form>
    </div>
</section>

<style>
    div {
        font-size:20px;
    }

    label {
        width: 20%;
        margin: 10px;
    }
    
    input {
        width: 20%;
    }
</style>
