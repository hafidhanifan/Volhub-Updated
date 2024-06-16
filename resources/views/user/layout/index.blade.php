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
            <h2>Apa itu <span>VolHub?</span></h2>
          </div>
          <div class="introduction__description">
            <p>
              <span>VolHub</span> merupakan platform kesukarelawanan.
              <span>VolHub</span> menjadi penghubung antara orang yang
              hendak menyalurkan kebaikannya kepada komunitas dan masyarakat
              yang membutuhkan bantuan.
            </p>
          </div>
        </article>

        <article class="introduction__text introduction__text-bottom">
          <div class="introduction__title">
            <h2>Kenapa harus <span>VolHub?</span></h2>
          </div>
          <div class="introduction__description">
            <p>
              <span>VolHub</span> memberikan berbagai kegiatan sukarelawan
              dengan <span>kualitas yang tinggi, berdampak besar</span>, dan
              tentunya dapat memberikan
              <span>pengalaman berkesan</span> bagi yang mengikuti.
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
          <a href="{{ route('daftar.Kegiatan') }}">Selengkapnya</a>
        </div>
      </section>

      <section class="team">
        <div class="team__header">
          <h5>Tim Volhub</h5>
          <p>Nah, berikut adalah wajah-wajah dibalik layar VolHub</p>
        </div>

        <div class="team__body">
          <div class="team__item">
            <img src="{{ asset('img/team-hafid.jpg') }}" alt="" />
            <div class="team__item-name">
              <h6>Hafid Hanifan</h6>
              <p>Fullstack Developer</p>
            </div>
          </div>

          <div class="team__item">
            <img src="{{ asset('img/team-dinda.jpg') }}" alt="" />
            <div class="team__item-name">
              <h6>Dinda Farras G.</h6>
              <p>Fullstack Developer & UI/UX Designer</p>
            </div>
          </div>

          <div class="team__item">
            <img src="{{ asset('img/team-arsa.jpg') }}" alt="" />
            <div class="team__item-name">
              <h6>Michael Arsawijaya</h6>
              <p>UI/UX Designer, Business Development</p>
            </div>
          </div>
        </div>
      </section>
    </main>
@include('user.layout.templates.footer')
