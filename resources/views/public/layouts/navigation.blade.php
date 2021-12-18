  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
      <div class="container px-4 px-lg-5">
          <a class="navbar-brand" href="/">Berita Gabut</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
              aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ms-auto py-4 py-lg-0">
                  <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                          href="{{ route('home') }}">Home</a></li>
                  <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                          href="{{ route('about') }}">About</a></li>
                  <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                          href="{{ route('sample') }}">Sample Post</a>
                  </li>
                  <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                          href="{{ route('contact') }}">Contact</a>
                  </li>
                  @if (Route::has('login'))
                      @auth
                          <li class="nav-item">
                              <a href="{{ route('admin.home') }}" class="nav-link px-lg-3 py-3 py-lg-4 ">Admin</a>
                          </li>
                      @else
                          <li class="nav-item">
                              <a href="{{ route('login') }}" class="nav-link px-lg-3 py-3 py-lg-4 text-">Log
                                  in</a>
                          </li>
                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a href="{{ route('register') }}"
                                      class="nav-link px-lg-3 py-3 py-lg-4 text-green">Register</a>
                              </li>
                          @endif
                      @endauth
                  @endif
              </ul>
          </div>
      </div>
  </nav>
