<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<head>
    <title>Seller Portal</title>
</head>
<section>
    @include('components.header')
</section>
<section style="background-color: #eee;">
    <div class="text-center container py-5">
        <h1 class="mt-4 mb-5">
            <strong>
                @if(Auth::user()->role == 'admin')
                Admin Portal
                @else
                Seller Portal
                @endif
            </strong>
        </h1>
        @if(Auth::user()->role=='seller')
        <div>
            <a href="{{ route('seller.create') }}" style="font-size: 20px;" class="btn btn-success">Add Listing</a>
        </div>
        @endif
        <a href="{{ url("profile/".Auth::user()->id) }}" class="btn btn-default">Go Back</a>
        <br>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Variant</th>
                    <th>Color</th>
                    <th>Plate Number</th>
                    <th>Year of Manufacture</th>
                    <th>Engine CC</th>
                    <th>Price</th>
                    <th>Condition</th>
                    <th></th>
                </tr>
            </thead>

            @foreach($cars as $car)
            <tbody>
                <tr>
                    <td><img src="{{ asset($car->file_path) }}" alt="{{ $car->filename }}" width=250 height=200></td>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->variant }}</td>
                    <td>{{ $car->color }}</td>
                    <td>{{ $car->plateNumber }}</td>
                    <td>{{ $car->yearOfManufacture }}</td>
                    <td>{{ $car->engineCC }}</td>
                    <td>{{ $car->price }}</td>
                    <td>{{ $car->condition }}</td>
                    <td>
                        @if(Auth::user()->role !="admin")
                        <form action="{{ route('seller.edit', $car->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary" style="width: 100px;">Edit</button>
                        </form>
                        @endif
                        <form action="{{ route('seller.destroy', $car->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="width: 100px;">Delete</button>
                        </form>

                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>

        <br>

        <div class="d-flex justify-content-center">
            {{ $cars->links() }}
        </div>

    </div>
</section>
@include('components.footer')
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    thead {
        background-color: #0dcaf0;
        border: 1px solid black;
        text-align: center;
    }

    td {
        background-color: #ffffff;
        border: 1px solid black;
        padding: 10px;
    }

    .w-5 {
        display: none
    }
</style>