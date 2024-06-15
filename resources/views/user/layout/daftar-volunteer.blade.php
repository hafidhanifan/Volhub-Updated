@include('user.layout.templates.header')
@include('user.layout.templates.navbar')

    <main>
      <div class="layout-wrapper">
          @if(auth()->check())
            @php
              $user = auth()->user();
            @endphp
              <section class="sidebar">
                <div class="profile">
                  <div class="profile__image">
                    @if(!empty($user->foto_profile))
                      <img src="{{asset('storage/foto-profile/'.$user->foto_profile)}}" alt="profile user" />
                    @else
                      <img src="{{asset('img/logo-user.png')}}" alt="profile user" />
                    @endif
                  </div>
                  <div class="profile__data">
                    <div class="profile__data-name">
                      <p>{{$user->nama_user}}</p>
                    </div>
                    <div class="profile__data-location">
                      <i class="fa-solid fa-location-dot"></i>
                      @if(!empty($user->domisili))
                        <p>{{ $user->domisili }}, Indonesia</p>
                      @else
                        <p>Anda belum mengisikan data lokasi</p>
                      @endif
                    </div>
                    <form  action="{{ route('user.detail-profile-page', ['id' => $user->id]) }}" method="POST" class="profile__data-button">
                      @csrf
                      @method('GET')
                      <button>Kegiatan</button>
                    </form>
                  </div>
                </div>
                <div class="skill">
                  <div class="skill__header">
                    <p>Top Skills</p>
                  </div>
                  <div class="skill__item">
                    <ul>
                      <?php $no = 1 ?>
                      @foreach($user->skills as $skill)
                      <li>{{$skill->nama_skill}}</li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </section>
            
        
        <section class="content">
          <div class="content__header">
            <div class="content__header-showing">
              <p>Menampilkan <span>{{ $totalKegiatan }}</span></p>
              <form class="content__header-search">
                <div class="search-wrapper">
                  <i class="fa-solid fa-magnifying-glass"></i>
                  <input type="text" placeholder="Search.." />
                </div>
              </form>
            </div>
            <div class="content__header-show-profile">
              <i id="showUser" class="fa-solid fa-address-card"></i>
            </div>
            <div id="overlay" class="overlay"></div>
          </div>
          <div class="content__body">
            <?php $no = 1 ?>
            @foreach($kegiatan as $kegiatan)
            <div class="content__body-item">
              <div class="content__item-image">
                @if ($kegiatan->gambar)
                  <img src="{{asset('storage/gambar/'.$kegiatan->gambar)}}" alt="Gambar Kegiatan" />
                @endif
                <div class="content__item-image-text">
                  <p>Kegiatan {{ $kegiatan->sistem_kegiatan }}</p>
                </div>
              </div>
              <div class="content__item-data">
                <div class="content__data-title">
                  <h1>{{ $kegiatan->nama_kegiatan }}</h1>
                </div>
                <div class="content__data-location">
                  <i class="fa-solid fa-location-dot"></i>
                  <p>{{ $kegiatan->lokasi_kegiatan }}</p>
                </div>

                <form action="{{ route('user.detail-kegiatan-page', ['id' => $user->id, 'id_kegiatan' => $kegiatan->id_kegiatan]) }}" method="POST" class="content__data-button">
                  @csrf
                  @method('GET')
                  <button>Detail</button>
                </form>
              </div>
            </div>
            @endforeach

          </div>
        </section>

        @else
            <section class="sidebar">
              <div class="profile">
                <div class="profile__image">
                  <img src="{{ asset('img/logo-user.png')}}" alt="" />
                </div>
                <div class="profile__data">
                  <div class="profile__data-name">
                    <p>Silahkan Login Terlebih Dahulu</p>
                  </div>
                  <form action="{{route('login.user')}}">
                    <div class="profile__data-button-logout">
                      <button>Login</button>
                    </div>
                  </form>
                </div>
              </div>
            </section>  

            <section class="content">
              <div class="content__header">
                <div class="content__header-showing">
                  <p>Menampilkan <span>{{ $totalKegiatan }}</span></p>
                  <form class="content__header-search">
                    <div class="search-wrapper">
                      <i class="fa-solid fa-magnifying-glass"></i>
                      <input type="text" placeholder="Search.." />
                    </div>
                  </form>
                </div>
                <div class="content__header-show-profile">
                  <i id="showUser" class="fa-solid fa-address-card"></i>
                </div>
                <div id="overlay" class="overlay"></div>
              </div>
              <div class="content__body">
                <?php $no = 1 ?>
                @foreach($kegiatan as $kegiatan)
                <div class="content__body-item">
                  <div class="content__item-image">
                    @if ($kegiatan->gambar)
                      <img src="{{asset('storage/gambar/'.$kegiatan->gambar)}}" alt="Gambar Kegiatan" />
                    @endif
                    <div class="content__item-image-text">
                      <p>{{ $kegiatan->sistem_kegiatan }}</p>
                    </div>
                  </div>
                  <div class="content__item-data">
                    <div class="content__data-title">
                      <h1>{{ $kegiatan->nama_kegiatan }}</h1>
                    </div>
                    <div class="content__data-location">
                      <i class="fa-solid fa-location-dot"></i>
                      <p>{{ $kegiatan->lokasi_kegiatan }}</p>
                    </div>
    
                    <form action="{{ route('user.detail-kegiatan', ['id_kegiatan' => $kegiatan->id_kegiatan]) }}" method="POST" class="content__data-button">
                      @csrf
                      @method('GET')
                      <button>Detail</button>
                    </form>
                  </div>
                </div>
                @endforeach
              </div>
            </section>
            @endif
      </div>
    </main>
@include('user.layout.templates.footer')

 
