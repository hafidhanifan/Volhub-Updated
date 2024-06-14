<header class="app-bar">
    <div class="app-bar__logo">
      <img src="{{ asset('img/volhub-small-logo.png') }}" alt="Volhub Logo" />
      <i id="drawerButton" class="fa-solid fa-bars"></i>
    </div>
    <nav class="app-bar__navigation">
      @if(auth()->check())
      @php
          $user = auth()->user();
      @endphp
      <ul class="">
        <li><a href="{{ route('user.home') }}">Home</a></li>
        <li><a href="{{ route('daftar.kegiatan', ['id' => $user->id]) }}">Daftar Kegiatan</a></li>
        <li><a href="">Tentang Kami</a></li>
      </ul>
      @else
      <ul class="">
        <li><a href="{{ route('user.home') }}">Home</a></li>
        <li><a href="{{ route('user.daftarKegiatan') }}">Daftar Kegiatan</a></li>
        <li><a href="">Tentang Kami</a></li>
      </ul>
      @endif
    </nav>
    @if(auth()->check())
      @php
          $user = auth()->user();
      @endphp
      <div class="app-bar__user-panel">
        <div class="app-bar__sign-up">
          <a href="{{ route('user.logout') }}"> Logout </a>
        </div>
        <img src="{{asset('storage/foto-profile/'.$user->foto_profile)}}" alt="profile user" />
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