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
</body>
</html>