<div>
    <a href="{{ route('seller.create') }}" class="btn btn-success">Add Listing</a>
</div>

@foreach($cars as $car)
    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Variant</th>
                <th>Color</th>
                <th>Year of Manufacture</th>
                <th>Engine CC</th>
                <th>Price</th>
                <th>Condition</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><img src="{{ asset($car->file_path) }}" alt="{{ $car->filename }}" width=100 height=100></td>
                <td>{{ $car->brand }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->variant }}</td>
                <td>{{ $car->color }}</td>
                <td>{{ $car->yearOfManufacture }}</td>
                <td>{{ $car->engineCC }}</td>
                <td>{{ $car->price }}</td>
                <td>{{ $car->condition }}</td>
                <td>
                    <form action="{{ route('seller.edit', $car->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                    <form action="{{ route('seller.destroy', $car->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </td>
            </tr>
        </tbody>
    </table>
    
@endforeach
