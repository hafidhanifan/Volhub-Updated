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
          <div class="program__item">
            <div class="program__item-image">
              <img src="{{ asset('img/program-2.jpg') }}" alt="" />
              <p class="program__item-image-text">
                Kegiatan <span>Offline</span>
              </p>
            </div>
            <div class="program__item-title">
              <h4>Penanaman Hutan Mangroove di Pantai Baru</h4>
            </div>
            <div class="program__item-location">
              <p>Kab. Bantul, Daerah Istimewa Yogyakarta</p>
            </div>
            <div class="program__item-button">
              <button>Detail</button>
            </div>
          </div>

          <div class="program__item">
            <div class="program__item-image">
              <img src="{{ asset ('img/program-2.jpg') }}" alt="" />
              <p class="program__item-image-text">
                Kegiatan <span>Offline</span>
              </p>
            </div>
            <div class="program__item-title">
              <h4>Penanaman Hutan Mangroove di Pantai Baru</h4>
            </div>
            <div class="program__item-location">
              <p>Kab. Bantul, Daerah Istimewa Yogyakarta</p>
            </div>
            <div class="program__item-button">
              <button>Detail</button>
            </div>
          </div>

          <div class="program__item">
            <div class="program__item-image">
              <img src="{{ asset('img/program-2.jpg')}}" alt="" />
              <p class="program__item-image-text">
                Kegiatan <span>Offline</span>
              </p>
            </div>
            <div class="program__item-title">
              <h4>Penanaman Hutan Mangroove di Pantai Baru</h4>
            </div>
            <div class="program__item-location">
              <p>Kab. Bantul, Daerah Istimewa Yogyakarta</p>
            </div>
            <div class="program__item-button">
              <button>Detail</button>
            </div>
          </div>
        </div>
        <div class="program__button">
          <button>Selengkapnya</button>
        </div>
      </section>

      <section class="team">
        <div class="team__header">
          <h5>Tim Volhub</h5>
          <p>Nah, berikut adalah wajah-wajah dibalik layar VolHub</p>
        </div>

        <div class="team__body">
          <div class="team__item">
            <img src="{{ asset('img/profile-img.jpg') }}" alt="" />
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
