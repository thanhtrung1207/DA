<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- <link href="css/style.css" rel="stylesheet"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="logo" width="100">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
							<form method="POST" action="signup_script.php" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="name">Name</label>
									<input class="form-control" placeholder="Name" autofocus="on" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
									<div class="invalid-feedback">
										Name is required	
									</div>
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail Address</label>
									<input type="email" class="form-control"  placeholder=" Enter a valid Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true"><?php if(isset($_GET['m1'])) echo $_GET['m1']; ?>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="password">Password</label>
									<input type="password" class="form-control" placeholder="Password" title="Password must be 8 characters including 1 uppercase letter, 1 lowercase letter and numeric characters"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password" required = "true">
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>
                                <div class="mb-3">
									<label class="mb-2 text-muted" for="contact">Contact</label>
									<input type="text" class="form-control"  placeholder="Contact (ex. 8444844863)" maxlength="10" size="10" name="contact" required = "true">
								    <div class="invalid-feedback">
                                            Contact is required
							    	</div>
								</div>
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="city">City</label>
                                    <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                                    <div class="invalid-feedback">
                                            City is required
                                	</div>
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="address">Address</label>
                                    <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                                    <div class="invalid-feedback">
                                            Address is required
                                	</div>
                                </div>
                                
                                

								<p class="form-text text-muted mb-3">
									By registering you agree with our terms and condition.
								</p>

								<div class="align-items-center d-flex">
									<button type="submit" class="btn btn-primary ms-auto">
										Register	
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Already have an account? <a href="index.html" class="text-dark">Login</a>
							</div>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2017-2021 &mdash; Your Company 
					</div>
				</div>
			</div>
		</div>
	</section> 
        <?php include "includes/footer.php"; ?>
    </body>
</html>