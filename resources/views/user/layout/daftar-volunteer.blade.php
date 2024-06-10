@include('user.layout.templates.header')
@include('user.layout.templates.navbar')

    <main>
      <div class="layout-wrapper">
        <section class="sidebar">
          <div class="profile">
            <div class="profile__image">
              <img src="{{ asset('img/profile-img2.png') }}" alt="" />
            </div>
            <div class="profile__data">
              <div class="profile__data-name">
                <p>Dinda Farras</p>
              </div>
              <div class="profile__data-location">
                <i class="fa-solid fa-location-dot"></i>
                <p>Jakarta, Indonesia</p>
              </div>
              <div class="profile__data-button">
                <button>Kegiatan</button>
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
                <li>Content Writer</li>
                <li>Script Writer</li>
              </ul>
            </div>
          </div>
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
            <div class="content__body-item">
              <div class="content__item-image">
                <img src="img/program-3.jpg" alt="" />
                <div class="content__item-image-text">
                  <p>Kegiatan <span>Offline</span></p>
                </div>
              </div>
              <div class="content__item-data">
                <div class="content__data-title">
                  <h1>Penanaman Hutan Mangrove di Pantai Baru</h1>
                </div>
                <div class="content__data-location">
                  <i class="fa-solid fa-location-dot"></i>
                  <p>Kab.Bantul, Yogyakarta</p>
                </div>

                <div class="content__data-button">
                  <button>Detail</button>
                </div>
              </div>
            </div>

            <div class="content__body-item">
              <div class="content__item-image">
                <img src="img/program-3.jpg" alt="" />
                <div class="content__item-image-text">
                  <p>Kegiatan <span>Offline</span></p>
                </div>
              </div>
              <div class="content__item-data">
                <div class="content__data-title">
                  <h1>Penanaman Hutan Mangrove di Pantai Baru</h1>
                </div>
                <div class="content__data-location">
                  <i class="fa-solid fa-location-dot"></i>
                  <p>Kab.Bantul, Yogyakarta</p>
                </div>

                <div class="content__data-button">
                  <button>Detail</button>
                </div>
              </div>
            </div>

            <div class="content__body-item">
              <div class="content__item-image">
                <img src="img/program-3.jpg" alt="" />
                <div class="content__item-image-text">
                  <p>Kegiatan <span>Offline</span></p>
                </div>
              </div>
              <div class="content__item-data">
                <div class="content__data-title">
                  <h1>Penanaman Hutan Mangrove di Pantai Baru</h1>
                </div>
                <div class="content__data-location">
                  <i class="fa-solid fa-location-dot"></i>
                  <p>Kab.Bantul, Yogyakarta</p>
                </div>

                <div class="content__data-button">
                  <button>Detail</button>
                </div>
              </div>
            </div>

            <div class="content__body-item">
              <div class="content__item-image">
                <img src="img/program-3.jpg" alt="" />
                <div class="content__item-image-text">
                  <p>Kegiatan <span>Offline</span></p>
                </div>
              </div>
              <div class="content__item-data">
                <div class="content__data-title">
                  <h1>Penanaman Hutan Mangrove di Pantai Baru</h1>
                </div>
                <div class="content__data-location">
                  <i class="fa-solid fa-location-dot"></i>
                  <p>Kab.Bantul, Yogyakarta</p>
                </div>

                <div class="content__data-button">
                  <button>Detail</button>
                </div>
              </div>
            </div>

            <div class="content__body-item">
              <div class="content__item-image">
                <img src="img/program-3.jpg" alt="" />
                <div class="content__item-image-text">
                  <p>Kegiatan <span>Offline</span></p>
                </div>
              </div>
              <div class="content__item-data">
                <div class="content__data-title">
                  <h1>Penanaman Hutan Mangrove di Pantai Baru</h1>
                </div>
                <div class="content__data-location">
                  <i class="fa-solid fa-location-dot"></i>
                  <p>Kab.Bantul, Yogyakarta</p>
                </div>

                <div class="content__data-button">
                  <button>Detail</button>
                </div>
              </div>
            </div>

            <div class="content__body-item">
              <div class="content__item-image">
                <img src="img/program-3.jpg" alt="" />
                <div class="content__item-image-text">
                  <p>Kegiatan <span>Offline</span></p>
                </div>
              </div>
              <div class="content__item-data">
                <div class="content__data-title">
                  <h1>Penanaman Hutan Mangrove di Pantai Baru</h1>
                </div>
                <div class="content__data-location">
                  <i class="fa-solid fa-location-dot"></i>
                  <p>Kab.Bantul, Yogyakarta</p>
                </div>

                <div class="content__data-button">
                  <button>Detail</button>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>
@include('user.layout.templates.footer')

 
