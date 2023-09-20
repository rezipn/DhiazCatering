<!-- Navbar -->
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
      <a href="{{ route('home')}}" class="navbar-brand">
        <img src="{{ url('frontend/images/dhiazlogo.png') }}" alt="Logo Rez" />
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navb">

        @guest
        <ul class="navbar-nav ml-auto mr-3">
          <li class="nav-item mx-md-2">
            <a href="{{ route('register') }}" class="nav-link active">Daftar</a>
          </li>
        </ul>
        @endguest
        
        @auth
        <ul class="navbar-nav ml-auto mr-3">
          <li class="nav-item mx-md-2">
            <a href="" class="nav-link active"></a>
          </li>
        </ul>
        @endauth

        
        @guest
          <!--Mobile Button-->
          <form class="form-inline d-sm-block d-md-none">
          <button class="btn btn-login my-2 my-sm-0" type="button"
          onclick="event.preventDefault(); location.href='{{url('login')}}';">
            Masuk
          </button>
          </form>
        <!--Mobile Button-->

        <!--Dekstop Button-->
          <form class="form-inline my-2 my-lg-0 d-none d-md-block">
          <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
          onclick="event.preventDefault(); location.href='{{url('login')}}';">
            Masuk
          </button>
          </form>
        <!--Dekstop Button-->  
        @endguest

        @auth
          <!--Mobile Button-->
          <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
            @csrf
            <button class="btn btn-login my-2 my-sm-0" type="submit">
            Keluar
            </button>
          </form>
        <!--Mobile Button-->

        <!--Dekstop Button-->
          <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
            @csrf
            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
            Keluar
            </button>
          </form>
        <!--Dekstop Button-->  
        @endauth

      </div>
    </nav>
  </div>
  <!-- Akhir Navbar -->
