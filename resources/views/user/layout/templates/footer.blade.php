<footer class="footer">
    <div class="footer__body">
      <div class="footer__body-logo">
        <img src="{{ asset('img/volhub-footer-logo.png') }}" alt="" />
      </div>
      <div class="footer__body-wrapper">
        <div class="footer__body-section">
          <h6>Perusahaan</h6>
          <p>Tentang Kami</p>
          <p>Tim Kami</p>
          <p>Hubungi Kami</p>
        </div>
        <div class="footer__body-section">
          <h6>Untuk Pencari Volunteer</h6>
          <p>Kategori Kegiatan</p>
          <p>Lokasi Kegiatan</p>
          <p>Help Center</p>
        </div>
      </div>
      <div class="footer__body-support">
        <h6>Didukung oleh</h6>
        <img src="{{ asset('img/logo-kampus merdeka dan dicoding.png') }}" alt="" />
      </div>
    </div>
  </footer>

  <script src="{{ asset('/js/user.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
        @if(session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ session('error') }}',
            });
        @endif

        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
            });
        @endif
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/cropperjs@1.5.12/dist/cropper.min.js"></script>
<script>
  var image = document.getElementById('uploadInput');
  var preview = document.getElementById('preview');
  var cropper;

  image.addEventListener('change', function(e) {
      var files = e.target.files;
      if (files && files.length > 0) {
          var reader = new FileReader();
          reader.onload = function(event) {
              preview.src = event.target.result;
              preview.style.display = 'block';
              if (cropper) {
                  cropper.destroy(); // Menghancurkan cropper lama jika ada
              }
              cropper = new Cropper(preview, {
                  aspectRatio: 1,
                  viewMode: 1,
                  ready: function () {
                      cropper.setCropBoxData({ width: 256, height: 256 });
                  },
                  crop(event) {
                      var canvas = cropper.getCroppedCanvas({
                          width: 512,
                          height: 512,
                          minWidth: 256,
                          minHeight: 256,
                          maxWidth: 256,
                          maxHeight: 256,
                          fillColor: '#fff',
                          imageSmoothingEnabled: true,
                          imageSmoothingQuality: 'high',
                      });
                      canvas.toBlob(function(blob) {
                          var reader = new FileReader();
                          reader.readAsDataURL(blob);
                          reader.onloadend = function() {
                              var base64data = reader.result;
                              document.getElementById('cropped_image').value = base64data;
                          };
                      }, 'image/png', 1);
                  }
              });
          };
          reader.readAsDataURL(files[0]);
      }
  });
</script>

</body>
</html>