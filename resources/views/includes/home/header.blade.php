<header>

    <div class="mobile">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-light p-4">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Dies Natalies ke 55</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Info Terkini COVID-19</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link KEMENRISTEKDIKTI</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Galeri</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Alumni</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Mall Trisakti</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Unduhan</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                        @endif
                    </li>
                  </ul>
            </div>
          </div>
          <nav class="navbar navbar-dark bg-light">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
        </nav>
    </div>


    <div class="atas">
      <div class="container">
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Dies Natalies ke 55</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Info Terkini COVID-19</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link KEMENRISTEKDIKTI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Alumni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Mall Trisakti</a>
          </li>
          <li class="nav-item">

                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <a class="nav-link" href="{{ url('/home') }}">Beranda</a>
                    @else
                    <a class="nav-link" href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))

                    @endif
                @endauth
                </div>
                @endif
          </li>
        </ul>
      </div>
    </div>
    <div class="bawah">
      <div class="container">
        <nav class="navbar navbar-light">
          <div class="container-fluid">

            <nav class="nav">
            <img src="{{ asset('/asset/logo.png')}}" alt="">
              <a class="nav-link" href="#">UNIVERSITAS TRISAKTI</a>
            </nav>

            <form id="form" class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </nav>
      </div>
    </div>
    <div class="bawah-pisan">
      <div class="container">
        <nav class="nav">
          <a class="nav-link active" aria-current="page" href="#">BRANDA</a>
          <a class="nav-link" href="#">TENTANG TRISAKTI</a>
          <a class="nav-link" href="#">LEMBAGA</a>
          <a class="nav-link" href="#">GURU BESAR</a>
          <a class="nav-link" href="#">PEDOMAN & ARTIKEL</a>

        </nav>
      </div>
    </div>
  </header>
