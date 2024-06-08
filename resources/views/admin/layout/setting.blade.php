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
                  <h2>Setting</h2>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->
          <div class="form-elements-wrapper">
            <div class="row">
              <div class="col-lg-6">
                <!-- input style start -->
                <div class="card-style mb-30 d-flex flex-column">
                  <div class="input-style-1">
                    <label>Masukkan Username</label>
                    <input type="text" placeholder="Nama Kategori" />
                  </div>
                  <div class="input-style-1">
                    <label>Masukkan Password</label>
                    <input type="password" placeholder="Nama Kategori" />
                  </div>
                  <div class="input-style-1">
                    <label>Konfirmasi Password</label>
                    <input type="password" placeholder="Nama Kategori" />
                  </div>
                  <a
                    href="#0"
                    class="main-btn-kategori primary-btn rounded-full btn-hover right-align"
                    >Simpan</a
                  >
                </div>

                <!-- end card -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->

      @include('admin.layout.templates.footer')