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
              <h1>{{$kegiatan->nama_kegiatan}}</h1>
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
                <form action="{{ route('user.add-pendaftaran-action', ['id' => $user->id, 'id_kegiatan' => $kegiatan->id_kegiatan]) }}" method="POST" id="registrationForm">
                  @csrf
                  <input type="hidden" name="kegiatan_id" value="{{ $kegiatan->id }}">
                  <label for="reason">Motivasi mengikuti kegiatan ini </label>
                  <textarea
                    id="motivasi"
                    name="motivasi"
                    rows="4"
                    cols="50"
                    required
                  ></textarea>
                  <br /><br />
                  <label for="cv">Upload CV</label>
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
              {{ $kegiatan->deskripsi }}
            </p>
          </article>
          <div class="description__criteria">
            <div class="description__criteria-header">
              <h2>Kriteria</h2>
              <article class="description__criteria-body">
                <ul>
                  <?php $no = 1 ?>
                  @foreach($kegiatan->kriterias as $kriteria)
                  <li>{{$kriteria->nama_kriteria}}</li>
                  @endforeach
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
                    <?php $no = 1 ?>
                @foreach($kegiatan->benefits as $benefit)
                <i class="fa-solid fa-check"></i>
                    {{$benefit->nama_benefit}}
                @endforeach
                  </div>
                  <div class="description__benefit-item-text">
                    <p></p>
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
                <p><span>{{ $kegiatan->tgl_penutupan }}</span></p>
              </div>
              <div class="information__text-start">
                <h3>Tanggal Pelaksanan</h3>
                <p>{{ $kegiatan->tgl_kegiatan }}</p>
              </div>
              <div class="information__text-duration">
                <h3>Pelaksanaan</h3>
                <p>{{ $kegiatan->lama_kegiatan }}</p>
              </div>
              <div class="information__text-system">
                <h3>Sistem Kerja</h3>
                <p>{{$kegiatan->sistem_kegiatan}}</p>
              </div>
              <div class="information__text-location">
                <h3>Lokasi</h3>
                <p>{{ $kegiatan->lokasi_kegiatan}}, Indonesia</p>
              </div>
            </article>
          </div>
        </section>
      </div>

      <section class="recommendation">
        <div class="recommendation__header">
          <h2>Rekomendasi</h2>
          <p>Selengkapnya</p>
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
