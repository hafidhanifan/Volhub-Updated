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
        <div class="app-bar__user-icon">
        <img src="{{asset('storage/foto-profile/'.$user->foto_profile)}}" alt="profile user" />
        <i class="fa-solid fa-chevron-down user-dropdown"></i>
        </div>
      </div>
      <div class="dropdown">
        <div class="dropdown-item">
          <div class="dropdown-icon">
            <i class="fa-solid fa-user"></i>
          </div>
          <div class="dropdown-text">PROFILE</div>
        </div>
        <div class="dropdown-item">
          <div class="dropdown-icon">
            <i class="fa-solid fa-gear"></i>
          </div>
          <div class="dropdown-text">PENGATURAN AKUN</div>
        </div>
        <div class="dropdown-item">
          <div class="dropdown-icon">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
          </div>
          <div class="dropdown-text">LOGOUT</div>
        </div>
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