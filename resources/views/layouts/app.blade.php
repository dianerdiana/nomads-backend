<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ url("frontend/libraries/bootstrap/css/bootstrap.css") }}" />
    <link rel="stylesheet" href="{{ url("frontend/styles/main.css") }}" />
  </head>
  <body>
    <!-- Navbar -->

    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-white px-3 py-0">
        <a class="navbar-brand" href="#">
          <img src="{{ url('frontend/assets/icons/logo_nomads.png') }}" alt="navbar-brand" />
        </a>
        <button
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navb"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
          data-target="#navb"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navb">
          <ul class="navbar-nav ms-auto me-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Paket Travel</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Service
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#testimonialHeading" class="nav-link">Testimonial</a>
            </li>
          </ul>
          <!-- Mobile Button -->
          <form action="" class="form-inline d-sm-block d-md-none">
            <button class="btn btn-login my-2 my-sm-0 px-4">Masuk</button>
          </form>

          <!-- Desktop Button  -->
          <form action="" class="form-inline my-2 my-lg-0 d-none d-md-block">
            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
              Masuk
            </button>
          </form>
        </div>
      </nav>
    </div>

    @yield('content')

    <footer class="section-footer mt-5 mb-4 border-top">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="row">
              <div class="col-6 col-lg-3">
                <h5>FEATURES</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Reviews</a></li>
                  <li><a href="#">Community</a></li>
                  <li><a href="#">Social Media Kit</a></li>
                  <li><a href="#">Affiliate</a></li>
                </ul>
              </div>
              <div class="col-6 col-lg-3">
                <h5>ACCOUNT</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Refund</a></li>
                  <li><a href="#">Security</a></li>
                  <li><a href="#">Rewards</a></li>
                </ul>
              </div>
              <div class="col-6 col-lg-3">
                <h5>COMPANY</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Career</a></li>
                  <li><a href="#">Help Center</a></li>
                  <li><a href="#">Media</a></li>
                </ul>
              </div>
              <div class="col-6 col-lg-3">
                <h5>Get Connected</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Jakarta Selatan</a></li>
                  <li><a href="#">Indonesia</a></li>
                  <li><a href="#">0821 - 2222 - 8888</a></li>
                  <li><a href="#">support@nomads.id</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div
          class="row justify-content-center align-items-center pt-4 border-top"
        >
          <div class="col-auto text-gray-500 fw-light">
            2022 Copyright Nomads • All rights reserved • Made in Jakarta
          </div>
        </div>
      </div>
    </footer>

    <!--  Script  -->
    <script src="{{ url("frontend/libraries/jquery/jquery-3.6.0.min.js") }}"></script>
    <script src="{{ url("frontend/libraries/bootstrap/js/bootstrap.js") }}"></script>
    <script src="{{ url("frontend/libraries/retina/retina.min.js") }}"></script>
  </body>
</html>
