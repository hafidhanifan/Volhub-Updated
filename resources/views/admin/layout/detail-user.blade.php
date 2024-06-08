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
                  <h2>Informasi Detail Pengguna</h2>
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
                <!-- ========= card-style-4 start ========= -->
                <div class="card-style-4 profile">
                  <div class="card-image">
                    <a href="#0">
                      <img
                        src="assets/images/cards/card-style-4/card-1.png"
                        alt=""
                      />
                    </a>
                  </div>
                  <div class="profile-data">
                    <div class="profile-user-name">
                      <h3 class="text-gray mb-10">Nama</h3>
                      <p class="fw-bold text-black">Dinda Farras G</p>
                    </div>
                    <div class="profile-user-domisili">
                      <h3 class="text-gray mb-10">Domisili</h3>
                      <p class="fw-bold text-black">Jakarta, Indonesia</p>
                    </div>
                    <div class="profile-user-gender">
                      <h3 class="text-gray mb-10">Gender</h3>
                      <p class="fw-bold text-black">Perempuan</p>
                    </div>
                    <div class="profile-user-pendidikan">
                      <h3 class="text-gray mb-10">Pendidikan Terakhir</h3>
                      <p class="fw-bold text-black">SMA?SMK</p>
                    </div>
                    <div class="profile-user-usia">
                      <h3 class="text-gray mb-10">Usia</h3>
                      <p class="fw-bold text-black">21 Tahun</p>
                    </div>
                  </div>
                </div>
                <!-- ========= card-style-4 end ========= -->
              </div>
              <!-- ENd Col -->
              <div class="col-lg-6">
                <!-- end card -->
                <div class="card-style mb-30 mt-25">
                  <h1 class="mb-30 text-medium">Kemampuan</h1>

                  <ul class="custom-list">
                    <li>Social Media Specialist</li>
                    <li>Content Writer</li>
                    <li>Script Writer</li>
                    <li>Social Media Specialist</li>
                  </ul>
                </div>
                <!-- end card -->
              </div>
              <div class="col-lg-6">
                <!-- end card -->
                <div class="card-style mb-30 mt-25">
                  <h1 class="mb-30 text-medium">Kontak</h1>

                  <div class="profile-user-name">
                    <h3>Email</h3>
                    <p>dindafarras@gmail.com</p>
                  </div>
                  <div class="profile-user-domisili mt-20">
                    <h3>Kontak</h3>
                    <p>08123456789</p>
                </div>
                <!-- end card -->
              </div>
            </div>
            <!-- End Row -->
          </div>
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
              <a href="./assets/CV.pdf" class="d-flex align-items-center text-primary text-decoration-none" download>
                <img src="./assets/pdf.png" alt="PDF Icon" class="me-2" width="20" height="20">
                Dinda_Farras_CV.pdf
            </a>
            </div>
            <div class="address-item">
              <h5 class="text-bold">Bio</h5>
              <p class="text-sm">
                Social Media Specialist | Content Writer
              </p>
            </div>
          </div>
          <div class="address-item">
            <h5 class="text-bold">Deskripsi</h5>
            <p class="text-sm">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime iusto eaque tempore vel assumenda enim amet doloribus fugit hic sint quod laudantium blanditiis eligendi quae quo fuga, voluptatibus odio temporibus placeat omnis reprehenderit officia a velit architecto. Nobis nemo nulla, similique cum debitis, eveniet voluptatem numquam consequuntur nostrum deserunt vero?
            </p>
          </div>
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->

@include('admin.layout.templates.footer')