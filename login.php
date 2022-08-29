<?php
include('link.php');
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="main">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <a href="#"><img src="GUVI.png" alt="GUVI-image" class="nav-logo" ></a>
      <a class="navbar-brand" href="#">GUVI</a>
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
          <input class="form-control me-2 nav-search" style="width: 22rem"  type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success search-btn" type="submit" style="padding: 5px !important;
  font-size: 14px !important;">Search</button>
        </form>
      </div>
    </div>
  </nav>

   <div class="row">
    <div class="col-lg-9">

    </div>
    <div class="col-lg-3 form-padding">
      <div class="form">
      <form class="ms-auto" method="POST" action="login_code.php">
                <img src="user.png" class="user-img img-fluid center-block d-block ms-auto" alt="" srcset="">
                <input type="email" name="email" placeholder="Enter Email Here">
                <input type="password" name="password" placeholder="Enter Password Here">
                <button type="submit" name="login" class="login-btn btn btn-primary center-block d-block mx-auto">Login</button>
                </form>
                <p class="acc-txt text-center">Don't have an account</p>
                <p class="link"><a href="./Registration.php">Sign up here</a></p>
                <p class="social-txt text-center">ALSO CHECK</p>

                <div class="icons">
                    <a href="https://www.facebook.com/guviofficial/"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="https://www.instagram.com/guviofficial/?hl=en"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="https://twitter.com/guviofficial?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a href="https://www.guvi.in/"><ion-icon name="logo-google"></ion-icon></a>
                </div>

      </div>
    </div>

    </div>
   </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>  
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script>
      var swiper = new Swiper(".mySwiper", {
        pagination: {
          el: ".swiper-pagination",
        },
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,}
      });
    </script>
</body>