@include('user.layout.templates.header')
@include('user.layout.templates.navbar')
@include('user.layout.templates.hero')
 <main>
      <section class="introduction">
        <div class="introduction__logo">
          <img src="{{ asset('img/volhub-big-logo.png') }}" alt="" />
        </div>
        <div class="introduction__wrapper">
          <div class="introduction__content">
            <article class="introduction__text introduction__text-top">
              <div class="introduction__title">
                <h2>Tentang VolHub</h2>
                <span></span>
              </div>
              <div class="introduction__description">
                <p>
                  VolHub merupakan platform kesukarelawanan. VolHub menjadi penghubung antara orang yang
                  hendak menyalurkan kebaikannya kepada komunitas dan masyarakat yang membutuhkan bantuan.
                </p>
              </div>
            </article>

            <article class="introduction__text introduction__text-bottom">
              <div class="introduction__description">
                <p>
                  VolHub memberikan berbagai kegiatan sukarelawan
                  dengan kualitas yang tinggi, berdampak besar, dan
                  tentunya dapat memberikan pengalaman berkesan bagi yang mengikuti.
                </p>
              </div>
            </article>
          </div>
        </div>
      </section>

      <section class="program">
        <div class="program__header">
          <h3>Lihat Acara Kami!</h3>
        </div>
        <div class="program__body">

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
              </div>
            </div>
            @endforeach
        </div>
        <div class="program__button">
          <a href="{{route('daftar.kegiatan')}}">Selengkapnya</a>
        </div>
      </section>

      <section class="team">
        <div class="team__header">
          <h5>Tim Volhub</h5>
          <p>Nah, berikut adalah wajah-wajah dibalik layar VolHub</p>
        </div>

        <div class="team__body">
          <div class="team__item">
            <img src="{{ asset('img/hapid.jpg') }}" alt="" />
            <div class="team__item-name">
              <h6>Arsa Wijaya</h6>
              <p>Bio</p>
            </div>
          </div>

          <div class="team__item">
            <img src="{{ asset('img/dinda.jpg') }}" alt="" />
            <div class="team__item-name">
              <h6>Arsa Wijaya</h6>
              <p>Bio</p>
            </div>
          </div>

          <div class="team__item">
            <img src="{{ asset('img/profile-img.jpg') }}" alt="" />
            <div class="team__item-name">
              <h6>Arsa Wijaya</h6>
              <p>Bio</p>
            </div>
          </div>
        </div>
      </section>
    </main>
@include('user.layout.templates.footer')
