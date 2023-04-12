<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<head>
	<title>Messages</title>
</head>
<section>
    @include('components.header')
</section>
<br>
<br>
<div class="container">
  <div class="card">
    <div class="card-body">
      <h1 class="card-title"><strong>Messages</strong></h1>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="table-responsive">
            @foreach($messages as $message)
            <table class="table table-striped table-product">
              <tbody>
                <tr>
                  <td width="390">Name</td>
                  <td>{{$message->name}}</td>
                </tr>
                <tr>
                  <td>Contact Number</td>
                  <td>{{$message->contactNumber}}</td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>{{$message->email}}</td>
                </tr>
                <tr>
                  <td>Comment</td>
                  <td>{{$message->comment}}</td>
                </tr>
              </tbody>
            </table>
            @endforeach
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