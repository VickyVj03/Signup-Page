<?php
include('link.php');
?>



<section class="registration-section" style="background: url(./student4.jpg)">
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: transparent !important;">
  <div class="container-fluid">
    <a href="#"><img src="GUVI.png" alt="GUVI-image" class="nav-logo" ></a>
    <a class="navbar-brand" style="font-size: 24px" href="#">GUVI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <form class="d-flex search-form">
        <input class="form-control me-2 nav-search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success search-btn" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<div class="container">
<div class="card">
<article class="card-body mx-auto">
	<h4 class="card-title mt-3 text-center" style="font-weight: 700 !important;">Create Account</h4>
	<p class="text-center get-started">Get started with your free account</p>
	<form action="registration_code.php" method="POST">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="firstname" class="form-control" placeholder="First name" type="text" required>
    </div> <!-- form-group// -->
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="lastname" class="form-control" placeholder="Last name" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
			<input name="contact" class="form-control" placeholder="Phone number" type="text">
    </div>
    <div class="form-group input-group">
    <span class="input-group-text"> DOB </span>
                    <div class="col-sm-9">
                        <input type="date" name="dob" id="birthDate" class="form-control">
                    </div>
                </div> 
    <!-- form-group// -->
    <div class="form-group input-group">
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" />
  <label class="form-check-label" for="inlineRadio1"><span class="male">Male</span></label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female" />
  <label class="form-check-label" for="inlineRadio2"><span class="female">Female</span></label>
</div>
                    </div> 
    <!-- form-group// -->
     <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" name="password" placeholder="Create password" type="password">
    </div> <!-- form-group// -->
     <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Register Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->
</section>