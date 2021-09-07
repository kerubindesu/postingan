<nav class="navbar  navbar-expand-lg navbar-custom justify-content-center">
    <div class="container-fluid col-md-10 px-3 px-md-0">
      <a class="navbar-brand" href="{{url('/')}}">
          <img class="navbar-logo" src="{{ asset('img/logo.png') }}" alt="navbar-logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        {{-- <span class="navbar-toggler-icon"></span> --}}
        <i class="fas fa-bars navbar-toggler-icon"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Program Kami
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              @foreach($bykelas as $kelas)
              <li><a class="dropdown-item" href="{{ url('/kelas/'.$kelas->slug)}}">{{$kelas->name}}</a></li>
              @endforeach
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/gallery')}}">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/live-streaming')}}">Live Streaming</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/lokasi')}}">Lokasi Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/tentang-kami')}}">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/blog')}}">Blog</a>
          </li>
        </ul>
        {{-- <div><a href="{{url('login')}}" class="btn btn-dark ms-5">Login</a></div> --}}
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="user/login">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="user/register">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
      </div>
    </div>
  </nav>