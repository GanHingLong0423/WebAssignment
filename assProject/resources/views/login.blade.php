<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<head>
	<title>Login</title>
</head>
<section style="background-color: #eee;">
    <div class="container py-5 text-center">
        <h1 class="mt-4 mb-5"><strong>Login</strong></h1>
        
        <div class="card shadow mx-auto" style="width: 40%">
            <div class="card-body">
                <form action="login" method="POST" class="form was-validated">
                    @csrf
                    <div class="mb-2">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" autofocus required>
                        <div class="invalid-feedback">Please enter email</div>
                    </div>
                    <div class="mb-2">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="invalid-feedback">Please enter password</div>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Login</button>
                    </div>
                </form>
                <hr>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#signupModal">Create New Account</button>
            </div>
        </div>
    </div>

     <!-- Start signup modal -->
     <div class="modal fade" id="signupModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Signup</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="signup" method="POST" class="form was-validated">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-2">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                            <div class="invalid-feedback">Please enter name</div>
                        </div>
                        <div class="mb-2">
                            <input type="tel" name="phoneNum" id="phoneNum" class="form-control" placeholder="Phone number" required>
                            <div class="invalid-feedback">Please enter phone number</div>
                        </div>
                        <div class="mb-2">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                            <div class="invalid-feedback">Please enter email</div>
                        </div>
                        <div class="mb-2">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                            <div class="invalid-feedback">Please enter password</div>
                        </div>
                        <div class="mb-2">
                            <textarea name="address" id="address" class="form-control" placeholder="Address" required></textarea>
                            <div class="invalid-feedback">Please enter address</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End signup modal -->
</section>
@include('components.footer')