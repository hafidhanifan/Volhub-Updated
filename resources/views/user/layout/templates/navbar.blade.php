<header class="app-bar">
    <div class="app-bar__logo">
      <img src="{{ asset('img/volhub-small-logo.png') }}" alt="Volhub Logo" />
      <i id="drawerButton" class="fa-solid fa-bars"></i>
    </div>
    <nav class="app-bar__navigation">
      <ul class="">
        <li><a href="index.html">Home</a></li>
        <li><a href="daftar-volunteer.html">Daftar Kegiatan</a></li>
        <li><a href="">Tentang Kami</a></li>
      </ul>
    </nav>
    @if(auth()->check())
      @php
          $user = auth()->user();
      @endphp
      <div class="app-bar__user-panel">
        <a href=""><i class="fa-solid fa-bell notification-icon"></i></a>
        <a href=""><i class="fa-solid fa-circle-user user-icon"></i></a>
      </div>
    @else
      <div class="app-bar__sign-up">
        <p>Sign Up</p>
      </div>
    @endif
      
    <div class="mobile-nav">
      <li><a href="">Home</a></li>
      <li><a href="">Daftar Kegiatan</a></li>
      <li><a href="">Tentang Kami</a></li>
      <li><a href="" class="sign-up">Sign Up</a></li>
    </div>
  </header>