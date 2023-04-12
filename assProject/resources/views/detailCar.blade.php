<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<head>
	<title>{{$car['brand']." ".$car['model']}}</title>
</head>
<div>
    @include('components.header')
</div>
<br>
<br>
<div class="container">
  <div class="card">
    <div class="card-body">
      <h1 class="card-title"><strong>{{$car['brand']." ".$car['model']}}</strong></h1>
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-6">
          <div class="white-box text-center"><img src="{{ asset($car['file_path']) }}" class="w-100" style="height:250px" /></div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-6">
          
          <h3 class="box-title mt-5">Key Highlights</h3>
          <ul class="list-unstyled">
            <li><i class="fa fa-check text-success"></i>Sturdy structure</li>
            <li><i class="fa fa-check text-success"></i>Designed to foster easy portability</li>
            <li><i class="fa fa-check text-success"></i>Perfect furniture to flaunt your wonderful collectibles</li>
          </ul>
          <a href='{{$car['id']."/contact"}}'><button type="button" class="btn btn-success" style="width: 300px;height:50px">Send Message</button></a>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
          <h3 class="box-title mt-5">General Info</h3>
          <div class="table-responsive">
            <table class="table table-striped table-product">
              <tbody>
                <tr>
                  <td width="390">Brand</td>
                  <td>{{$car['brand']}}</td>
                </tr>
                <tr>
                  <td>Model</td>
                  <td>{{$car['model']}}</td>
                </tr>
                <tr>
                  <td>Variant</td>
                  <td>{{$car['variant']}}</td>
                </tr>
                <tr>
                  <td>Color</td>
                  <td>{{$car['color']}}</td>
                </tr>
                <tr>
                  <td>Plate Number</td>
                  <td>{{$car['plateNumber']}}</td>
                </tr>
                <tr>
                  <td>Year Of Manufacture</td>
                  <td>{{$car['yearOfManufacture']}}</td>
                </tr>
                <tr>
                  <td>Engine CC</td>
                  <td>{{$car['engineCC']}}</td>
                </tr>
                <tr>
                  <td>Price</td>
                  <td>{{"RM  ".$car['price']}}</td>
                </tr>
                <tr>
                  <td>Condition</td>
                  <td>{{$car['condition']}}</td>
                </tr>

 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('components.footer')

<style>
  body {
    background-color: #edf1f5;
    margin-top: 20px;
  }

  .card {
    margin-bottom: 30px;
  }

  .card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: 0;
  }

  .card .card-subtitle {
    font-weight: 300;
    margin-bottom: 10px;
    color: #8898aa;
  }

  .table-product.table-striped tbody tr:nth-of-type(odd) {
    background-color: #f3f8fa !important
  }

  .table-product td {
    border-top: 0px solid #dee2e6 !important;
    color: #728299 !important;
  }
</style>