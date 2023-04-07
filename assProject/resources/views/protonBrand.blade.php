<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<head>
	<title>Proton</title>
</head>
<section style="background-color: #eee;">
    <div class="text-center container py-5">
        <h1 class="mt-4 mb-5"><strong>Proton</strong></h1>

        <div class="row">
            @foreach($cars as $car)
            @if($car['brand']=='Proton'||$car['brand']=='proton')
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card">
                    <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                    <!-- <img src="{{asset('storage/'.$car['url'])}}" class="w-100" />   -->
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/belt.webp" class="w-100" />
                        <a href="#!">
                            <div class="mask">
                            </div>
                            <div class="hover-overlay">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="text-reset">
                            <h5 class="card-title mb-3">{{$car['brand']." ".$car['model']}}</h5>
                        </div>
                        <div class="text-reset">
                            <p>{{$car['variant']." ".$car['yearOfManufacture']}}</p>
                        </div>
                        <h6 class="mb-3">{{"RM ".$car['price']}}</h6>
                        <a href='{{"proton/".$car['id']}}'><button type="button" class="btn btn-info">View detail</button></a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach

        </div>
    </div>
</section>
@include('components.footer')