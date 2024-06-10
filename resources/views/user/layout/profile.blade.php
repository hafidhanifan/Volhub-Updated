@include('user.layout.templates.header')
@include('user.layout.templates.navbar')
    <main>
      <div class="profile-container">
        <section class="abstract">
          <div class="abstract__profile">
            <div class="abstract__profile-image">
              <img src="" alt="" />
            </div>
            <div class="abstract__profile-summary">
              <div class="abstract__summary-header">
                <h1>{{ $user->nama_user }}</h1>
                <p>{{ $user->bio }}</p>
              </div>
              <div class="abstract__summary-body">
                <div class="abstract__body-telephone">
                  <h2>NOMER TELEPHONE</h2>
                  <p>{{ $user->nomor_telephone }}</p>
                </div>
                <div class="abstract__body-email">
                  <h2>EMAIL</h2>
                  <p>{{ $user->email_user }}</p>
                </div>
                <div class="abstract__body-domisili">
                  <h2>DOMISILI</h2>
                  <p>{{ $user->domisili }}, Indonesia</p>
                </div>
                <div class="abstract__body-usia">
                  <h2>USIA</h2>
                  <p>{{ $user->usia }} Tahun</p>
                </div>
                <div class="abstract__body-pendidikan">
                  <h2>PENDIDIKAN TERAKHIR</h2>
                  <p>{{ $user->pendidikan_terakhir }}</p>
                </div>
                <div class="abstract__body-cv">
                  <h2>CV</h2>
                  <p>{{ $user->cv }}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="abstract__button">
            <a href="{{ route('user.edit-profile-page', ['id' => $user->id]) }}">Edit Profil</a>
          </div>
        </section>
        <section class="about">
          <div class="about__header">
            <h2>Tentang Saya</h2>
          </div>
          <div class="about__body">
            <p>
              {{$user->deskripsi}}
            </p>
          </div>
        </section>
        <section class="status">
          <div class="status__skill">
            <div class="status__skill-body">
              <h3>Top Skills</h3>
              <ul>
                <li>Social Media Specialist</li>
                <li>Content Writer</li>
                <li>Script Writer</li>
              </ul>
            </div>
            <div class="status__skill-button">
              <button>Tambah Keahlian</button>
            </div>
          </div>
          <div class="status__process">
            <div class="status__process-header">
              <h3>Status Lamaran</h3>
            </div>
            <div class="status__process-body">
              <div class="status__process-item">
                <div class="status__item-logo">
                  <img src="img/volhub-small-logo.png" alt="volhub logo" />
                </div>
                <div class="status__item-text">
                  <h4>Penanaman Hutan Mangrove di Pantai Baru</h4>
                  <div class="status__item-date">
                    <i class="fa-regular fa-calendar"></i>
                    <p>Dikirm pada September 2023</p>
                  </div>
                  <p class="announcement">Diterima</p>
                </div>
              </div>

              <div class="status__process-item">
                <div class="status__item-logo">
                  <img src="img/volhub-small-logo.png" alt="volhub logo" />
                </div>
                <div class="status__item-text">
                  <h4>Penanaman Hutan Mangrove di Pantai Baru</h4>
                  <div class="status__item-date">
                    <i class="fa-regular fa-calendar"></i>
                    <p>Dikirm pada September 2023</p>
                  </div>
                  <p class="announcement">Diterima</p>
                </div>
              </div>

              <div class="status__process-item">
                <div class="status__item-logo">
                  <img src="img/volhub-small-logo.png" alt="volhub logo" />
                </div>
                <div class="status__item-text">
                  <h4>Penanaman Hutan Mangrove di Pantai Baru</h4>
                  <div class="status__item-date">
                    <i class="fa-regular fa-calendar"></i>
                    <p>Dikirm pada September 2023</p>
                  </div>
                  <p class="announcement">Diterima</p>
                </div>
              </div>

              <div class="status__process-item">
                <div class="status__item-logo">
                  <img src="img/volhub-small-logo.png" alt="volhub logo" />
                </div>
                <div class="status__item-text">
                  <h4>Penanaman Hutan Mangrove di Pantai Baru</h4>
                  <div class="status__item-date">
                    <i class="fa-regular fa-calendar"></i>
                    <p>Dikirm pada September 2023</p>
                  </div>
                  <p class="announcement">Diterima</p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>
@include('user.layout.templates.footer')
