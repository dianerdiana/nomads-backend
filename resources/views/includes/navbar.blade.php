<!-- Navbar -->

<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-white px-3 py-0">
    <a class="navbar-brand" href="{{ route('home') }}">
      <img src="{{ url('frontend/assets/icons/logo_nomads.png') }}" alt="navbar-brand" />
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navb"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" data-target="#navb">
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
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Service
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li>
              <a class="dropdown-item" href="#">Something else here</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#testimonialHeading" class="nav-link">Testimonial</a>
        </li>
      </ul>

      @guest
        <!-- Mobile Button -->
        <form class="form-inline d-sm-block d-md-none">
          @csrf
          <button class="btn btn-login my-2 my-sm-0 px-4" type="button"
            onclick="event.preventDefault(); location.href={{ url('login') }};">Masuk</button>
        </form>

        <!-- Desktop Button  -->
        <form class="form-inline my-2 my-lg-0 d-none d-md-block">
          @csrf
          <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
            onclick="event.preventDefault(); location.href='{{ url('login') }}';">
            Masuk
          </button>
        </form>
      @endguest

      @auth
        <!-- Mobile Button -->
        <form action="{{ url('logout') }}" method="POST" class="form-inline d-sm-block d-md-none">
          @csrf
          <button class="btn btn-login my-2 my-sm-0 px-4" type="submit">Logout</button>
        </form>

        <!-- Desktop Button  -->
        <form action="{{ url('logout') }}" method="POST" class="form-inline my-2 my-lg-0 d-none d-md-block">
          @csrf
          <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
            Logout
          </button>
        </form>
      @endauth

    </div>
  </nav>
</div>
