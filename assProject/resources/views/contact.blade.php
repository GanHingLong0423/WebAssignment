<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<head>
	<title>Contact</title>
</head>
<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image" />
				<h2>Contact Us</h2>
				<h4>We would love to hear from you !</h4>
			</div>
		</div>
		<div class="col-md-9">
			<form class="contact-form" method="POST" action='{{url("contactMessage")}}'>
				@csrf
				<input type="hidden" name="carid" value="{{$car['id']}}">
				<div class="form-group">
					<label class="control-label col-sm-10" for="fname"><strong>Name :</strong></label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="fname" placeholder="Enter Name" name="name" value="{{old('name')}}">
					</div>
					@error('name')
					<div class="col-sm-10">
						<span style="color:red">{{$message}}</span>
					</div>
					@enderror
					<br>

				</div>
				<div class="form-group">
					<label class="control-label col-sm-10" for="fname"><strong>Contact Number :</strong></label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="lname" placeholder="Enter Contact Number" name="contactNumber" value="{{old('contactNumber')}}">
					</div>
					@error('contactNumber')
					<div class="col-sm-10">
						<span style="color:red">{{$message}}</span>
					</div>
					@enderror
					<br>

				</div>
				<div class="form-group">
					<label class="control-label col-sm-10" for="email"><strong>Email :</strong></label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{old('email')}}">
					</div>
					@error('email')
					<div class="col-sm-10">
						<span style="color:red">{{$message}}</span>
					</div>
					@enderror
					<br>

				</div>
				<br>
				<div class="form-group">
					<label class="control-label col-sm-10" for="email"><strong>Car Info :</strong></label>

					<div class="col-sm-10">
						<h6 style="float:left;width:80px;margin:5px;padding-top:4px" for="email">Car Model:</h6>
						<input style="float:left;width:150px;margin:5px" class="form-control" value='{{$car['brand']." ".$car['model']}}' readonly>
						<label style="margin-left:70px;width:100px;padding-top:3px;margin-top:4px" for="email">Plate Number :</label>
						<input style="float:right;width:150px;margin:5px" class="form-control" value='{{$car['plateNumber']}}' readonly>
					</div>

				</div>
				<div class="col-sm-10">
					<h6 style="float:left;width:80px;margin:5px;padding-top:4px" for="email">Engine CC:</h6>
					<input style="float:left;width:150px;margin:5px" class="form-control" value='{{$car['engineCC']}}' readonly>
					<label style="margin-left:70px;width:80px;padding-top:3px;margin-top:4px" for="email">Price :</label>
					<input style="float:right;width:150px;margin:5px" class="form-control" value='{{"RM ".$car['price']}}' readonly>
				</div><br><br>


				<div class="form-group">
					<label class="control-label col-sm-10" for="comment">Feel Free to leave a message :</label>
					<div class="col-sm-10">
						<textarea class="form-control" rows="5" id="comment" name="comment" value="{{old('comment')}}"></textarea>
					</div>
					@error('comment')
					<div class="col-sm-10">
						<span style="color:red">{{$message}}</span>
					</div>
					@enderror
				</div>
				<br>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
					<a href="{{ url()->previous() }}" class="btn btn-default">Go Back</a>
				</div>
			</form>
		</div>
	</div>
	
</div>









<style>
	body {
		background-color: #25274d;
	}

	.contact {
		padding: 4%;
		height: 400px;
	}

	.col-md-3 {
		background: #ff9b00;
		padding: 4%;
		border-top-left-radius: 0.5rem;
		border-bottom-left-radius: 0.5rem;
	}

	.contact-info {
		margin-top: 10%;
	}

	.contact-info img {
		margin-bottom: 15%;
	}

	.contact-info h2 {
		margin-bottom: 10%;
	}

	.col-md-9 {
		background: #fff;
		padding: 3%;
		border-top-right-radius: 0.5rem;
		border-bottom-right-radius: 0.5rem;
	}

	.contact-form label {
		font-weight: 600;
	}

	.contact-form button {
		background: #25274d;
		color: #fff;
		font-weight: 600;
		width: 25%;
	}

	.contact-form button:focus {
		box-shadow: none;
	}
</style>