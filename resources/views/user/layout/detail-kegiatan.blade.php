@include('user.layout.templates.header')
@include('user.layout.templates.navbar')

    <section class="detail-header">
      <div class="detail-header__wrapper">
        <div class="detail-header__body">
          <div class="detail-header__body-name">
            <div class="detail-header__body-logo">
              <img src="{{ asset('img/volhub-small-logo.png') }}" alt="" />
            </div>
            <div class="detail-header__body-title">
              <h1>Penanaman Hutan Mangrove di Pantai Baru</h1>
            </div>
          </div>
          <div class="detail-header__body-button">
            <i class="fa-regular fa-bookmark"></i>
            <button id="openModalBtn">Daftar</button>
          </div>

          <div id="modal" class="modal__registration">
            <div class="modal__content">
              <div class="modal__header">
                <span id="closeModalBtn" class="close">&times;</span>
                <h2>Daftar Kegiatan Ini</h2>
              </div>
              <div class="modal__form">
                <form id="registrationForm">
                  <label for="reason">Alasan mengikuti kegiatan ini :</label>
                  <textarea
                    id="reason"
                    name="reason"
                    rows="4"
                    cols="50"
                    required
                  ></textarea>
                  <br /><br />
                  <label for="cv">Upload CV:</label>
                  <input type="file" id="cv" name="cv" required />
                  <br /><br />
                  <div class="modal__button">
                    <button type="submit">Kirim</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <main id="detail">
      <div class="container-detail">
        <section class="description">
          <article class="description__text">
            <h2>Deskripsi</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Temporibus nobis fugiat quasi, fugit laborum voluptas enim
              quisquam ullam vitae nemo cupiditate architecto sint ex tempore
              earum, quod eaque expedita ut delectus excepturi molestias magnam!
              Corrupti in velit quisquam, repellendus voluptates cum
              consequatur, fugit facere non autem eveniet quidem maiores est?
            </p>
          </article>
          <div class="description__criteria">
            <div class="description__criteria-header">
              <h2>Kriteria</h2>
              <article class="description__criteria-body">
                <ul>
                  <li>Lorem ipsum dolor sit amet consectetur.</li>
                  <li>
                    Lorem ipsum dolor sit amet consectetur. Aliquam volutpat
                    quis vel imperdiet dui. Velit consequat adipiscing nunc
                    integer neque.
                  </li>
                  <li>
                    Lorem ipsum dolor sit amet consectetur. Adipiscing arcu a
                    vulputate ut ullamcorper egestas id. Eu arcu sapien tempor
                    aenean risus risus scelerisque consectetur nisl. Proin
                    gravida magna scelerisque pellentesque mi euismod nisi
                    ultrices. Lectus amet volutpat amet dictumst suscipit nulla
                    non.
                  </li>
                  <li>
                    Lorem ipsum dolor sit amet consectetur. Aliquam volutpat
                    quis vel imperdiet dui. Velit consequat adipiscing nunc
                    integer neque.
                  </li>
                </ul>
              </article>
            </div>
          </div>
          <div class="description__benefit">
            <div class="description__benefit-header">
              <h2>Benefit</h2>
              <div class="description__benefit-body">
                <div class="description__benefit-item">
                  <div class="description__benefit-item-icon">
                    <i class="fa-solid fa-check"></i>
                  </div>
                  <div class="description__benefit-item-text">
                    <p>Asuransi Kesehatan</p>
                  </div>
                </div>

                <div class="description__benefit-item">
                  <div class="description__benefit-item-icon">
                    <i class="fa-solid fa-check"></i>
                  </div>
                  <div class="description__benefit-item-text">
                    <p>Asuransi Kesehatan</p>
                  </div>
                </div>

                <div class="description__benefit-item">
                  <div class="description__benefit-item-icon">
                    <i class="fa-solid fa-check"></i>
                  </div>
                  <div class="description__benefit-item-text">
                    <p>Asuransi Kesehatan</p>
                  </div>
                </div>

                <div class="description__benefit-item">
                  <div class="description__benefit-item-icon">
                    <i class="fa-solid fa-check"></i>
                  </div>
                  <div class="description__benefit-item-text">
                    <p>Asuransi Kesehatan</p>
                  </div>
                </div>

                <div class="description__benefit-item">
                  <div class="description__benefit-item-icon">
                    <i class="fa-solid fa-check"></i>
                  </div>
                  <div class="description__benefit-item-text">
                    <p>Asuransi Kesehatan</p>
                  </div>
                </div>

                <div class="description__benefit-item">
                  <div class="description__benefit-item-icon">
                    <i class="fa-solid fa-check"></i>
                  </div>
                  <div class="description__benefit-item-text">
                    <p>Asuransi Kesehatan</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="information">
          <div class="information__header">
            <h2>Informasi Kegiatan</h2>
            <article class="information__text">
              <div class="information__text-closed">
                <h3>Penutupan</h3>
                <p><span>20 September 2024</span></p>
              </div>
              <div class="information__text-start">
                <h3>Tanggal Pelaksanan</h3>
                <p>5 Oktober 2024</p>
              </div>
              <div class="information__text-duration">
                <h3>Pelaksanaan</h3>
                <p>1 Bulan</p>
              </div>
              <div class="information__text-system">
                <h3>Sistem Kerja</h3>
                <p>Offline</p>
              </div>
              <div class="information__text-location">
                <h3>Lokasi</h3>
                <p>Yogyakarta, Indonesia</p>
              </div>
            </article>
          </div>
        </section>
      </div>

      <section class="recommendation">
        <div class="recommendation__header">
          <h2>Rekomendasi</h2>
          <p>See All</p>
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
        </div>
      </section>
    </main>

@include('user.layout.templates.footer')
