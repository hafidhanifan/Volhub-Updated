@include('user.layout.templates.header')
@include('user.layout.templates.navbar')

    <main>
      <div class="layout-wrapper">
        <section class="sidebar">
          @if(auth()->check())
                @php
                    $user = auth()->user();
                @endphp
          <div class="profile">
            <div class="profile__image">
              <img src="{{ asset('img/profile-img2.png') }}" alt="" />
            </div>
            <div class="profile__data">
              <div class="profile__data-name">
                <p>{{$user->nama_user}}</p>
              </div>
              <div class="profile__data-location">
                <i class="fa-solid fa-location-dot"></i>
                <p>{{$user->domisili}}, Indonesia</p>
              </div>
              <div class="profile__data-button">
                <a href= "{{ route('user.detail-profile-page', ['id' => $user->id]) }}" >Kegiatan</a>
              </div>
            </div>
          </div>
          <div class="skill">
            <div class="skill__header">
              <p>Top Skills</p>
            </div>
            <div class="skill__item">
              <ul>
                <li>Social Media Specialist</li>
              </ul>
            </div>
          </div>
          @endif
        </section>
        <section class="content">
          <div class="content__header">
            <div class="content__header-showing">
              <p>Menampilkan <span>1082</span></p>
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
                  <img src="{{ Storage::url($kegiatan->gambar) }}" alt="Gambar Kegiatan" />
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

                <div class="content__data-button">
                  <button>Detail</button>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </section>
      </div>
    </main>
@include('user.layout.templates.footer')

 
