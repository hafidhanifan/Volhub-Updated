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
                  <h2>Informasi Pendaftar</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#0">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Page
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>

              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->
          <div class="invoice-wrapper">
            <div class="row">
              <div class="col-12">
                <div class="invoice-card card-style mb-30">
                  <div class="invoice-header">
                    <div class="invoice-for">
                      <h2 class="mb-10">Informasi Pribadi</h2>
                      <p class="text-sm">Dikirm pada September 2023</p>
                    </div>
                    <div class="invoice-date">
                      <a
                        href="#0"
                        class="main-btn warning-btn rounded btn-hover mr-15 button-review"
                        >Dalam Review</a
                      >
                      <a href="#0" class="main-btn dark-btn rounded btn-hover"
                        >Detail</a
                      >
                    </div>
                  </div>
                  <article class="information__text">
                    <div class="information__text-closed">
                      <h3>Nama</h3>
                      <p>Dinda FG</p>
                    </div>
                    <div class="information__text-start">
                      <h3>Gender</h3>
                      <p>Perempuan</p>
                    </div>
                    <div class="information__text-duration">
                      <h3>Email</h3>
                      <p>dinda@gmail.com</p>
                    </div>
                    <div class="information__text-system">
                      <h3>Usia</h3>
                      <p>21 Tahun</p>
                    </div>
                    <div class="information__text-location">
                      <h3>Kontak</h3>
                      <p>08123456789</p>
                    </div>

                    <div class="information__text-kategori">
                      <h3>Domisili</h3>
                      <p>Jakarta</p>
                    </div>
                  </article>
                </div>
                <!-- End Card -->
              </div>
              <!-- ENd Col -->
            </div>
            <!-- End Row -->
          </div>

          <div class="invoice-wrapper">
            <div class="row">
              <div class="col-12">
                <div class="invoice-card card-style mb-30">
                  <div class="invoice-header">
                    <div class="invoice-for">
                      <h2 class="mb-10">Informasi Kegiatan</h2>
                    </div>
                    <div class="invoice-date">
                      <a href="#0" class="main-btn dark-btn rounded btn-hover"
                        >Detail</a
                      >
                    </div>
                  </div>
                  <div class="informasi-kegiatan">
                    <div class="kegiatan-item">
                      <h3>Kegiatan</h3>
                      <p>Penanaman Hutan Mangroove di Pantai Baru</p>
                    </div>
                    <div class="kegiatan-item">
                      <h3>Sistem Kerja</h3>
                      <p>Offline</p>
                    </div>
                    <div class="kegiatan-item">
                      <h3>Lokasi</h3>
                      <p>Yogyakarta</p>
                    </div>
                  </div>
                </div>
                <!-- End Card -->
              </div>
              <!-- ENd Col -->
            </div>
            <!-- End Row -->
          </div>

          <div class="invoice-card card-style mb-30">
            <div class="invoice-header">
              <div class="invoice-for">
                <h2 class="mb-10">Lampiran</h2>
              </div>
            </div>
            <div class="invoice-address">
              <div class="address-item">
                <h5 class="text-bold">CV</h5>
                <a
                  href="./assets/CV.pdf"
                  class="d-flex align-items-center text-primary text-decoration-none"
                  download
                >
                  <img
                    src="./assets/pdf.png"
                    alt="PDF Icon"
                    class="me-2"
                    width="20"
                    height="20"
                  />
                  Dinda_Farras_CV.pdf
                </a>
              </div>
            </div>
            <div class="address-item">
              <h5 class="text-bold">Deskripsi</h5>
              <p class="text-lg">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                iusto eaque tempore vel assumenda enim amet doloribus fugit hic
                sint quod laudantium blanditiis eligendi quae quo fuga,
                voluptatibus odio temporibus placeat omnis reprehenderit officia
                a velit architecto. Nobis nemo nulla, similique cum debitis,
                eveniet voluptatem numquam consequuntur nostrum deserunt vero?
              </p>
            </div>
          </div>
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->
      @include('admin.layout.templates.footer')