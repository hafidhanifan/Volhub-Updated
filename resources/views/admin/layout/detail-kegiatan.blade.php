@include('admin.layout.templates.header')
@include('admin.layout.templates.sidebar')
@include('admin.layout.templates.navbar')  
 <!-- ========== section start ========== -->
 <section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2>Detail Project Volunteering</h2>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->

          <div class="row">
            <!-- Section detail header -->
            <section class="detail-header">
              <div class="detail-header__wrapper">
                <div class="detail-header__body">
                  <div class="detail-header__body-name">
                    <div class="detail-header__body-logo">
                      <img src="./assets/images/volhub-small-logo.png" alt="" />
                    </div>
                    <div class="detail-header__body-title">
                      <h1>Penanaman Hutan Mangrove di Pantai Baru</h1>
                    </div>
                  </div>
                  <div class="detail-header__body-button">
                    <i class="fa-regular fa-bookmark"></i>
                    <button>Edit</button>
                  </div>
                </div>
              </div>
            </section>
            <!-- Section detail header End -->
            <div class="col-lg-16 section-detail">
              <div class="card-style mb-30" style="margin-top: 100px">
                <h1 class="mb-30">Informasi Kegiatan</h1>
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
                    <h3>Sistem Kegiatan</h3>
                    <p>Offline</p>
                  </div>
                  <div class="information__text-location">
                    <h3>Lokasi</h3>
                    <p>Yogyakarta, Indonesia</p>
                  </div>

                  <div class="information__text-kategori">
                    <h3>Kategori</h3>
                    <p>Masyarakat</p>
                  </div>
                </article>
              </div>
              <!-- end card -->
            </div>

            <div class="col-lg-16">
              <div class="card-style mb-30">
                <h1 class="mb-30">Deskripsi</h1>
                <p>
                  <span class="text-success text-medium"> Paragraph text</span>
                  sit amet, consectetur adipiscing elit. Orci pellentesque amet
                  quam massa in aliquet pulvinar tincidunt. Enim sit elit
                  scelerisque vel aliquam vel quam a tincidunt. Nunc diam at sed
                  fames integer turpis libero. Id nunc quisque sed ut nec
                  phasellus turpis enim elit. Turpis lobortis pellentesque ac
                  massa risus faucibus tempus ut neque. Faucibus orci faucibus
                  malesuada imperdiet vitae.Lorem ipsum dolor sit amet,
                  consectetur adipiscing elit. Orci pellentesque amet quam massa
                  in aliquet pulvinar tincidunt. Enim sit elit scelerisque vel
                  aliquam vel quam a tincidunt. Nunc diam at sed fames integer
                  turpis libero. Id nunc quisque sed ut nec phasellus turpis
                  enim elit. Turpis lobortis pellentesque ac massa risus
                  faucibus tempus ut neque. Faucibus orci faucibus malesuada
                  imperdiet vitae.
                </p>
              </div>
              <!-- end card -->
            </div>

            <div class="col-lg-6">
              <!-- end card -->
              <div class="card-style mb-30">
                <h1 class="mb-30 text-medium">Benefit</h1>

                <ul class="custom-list">
                  <li>Social Media Specialist</li>
                  <li>Content Writer</li>
                  <li>Script Writer</li>
                  <li>Social Media Specialist</li>
                  <li>Content Writer</li>
                  <li>Script Writer</li>
                </ul>
              </div>
              <!-- end card -->
            </div>
            <div class="col-lg-6">
              <!-- end card -->
              <div class="card-style mb-30">
                <h1 class="mb-30 text-medium">Kriteria</h1>
                <ul class="custom-list">
                  <li>Social Media Specialist</li>
                  <li>Content Writer</li>
                  <li>Script Writer</li>
                  <li>Social Media Specialist</li>
                  <li>Content Writer</li>
                  <li>Script Writer</li>
                </ul>
              </div>
              <!-- end card -->
            </div>
          </div>
        </div>

        <!-- end container -->
      </section>

      <!-- ========== section end ========== -->
      @include('admin.layout.templates.footer')
