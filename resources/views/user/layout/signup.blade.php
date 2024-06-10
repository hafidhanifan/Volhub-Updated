@include('user.layout.templates.header')
    <div class="container">
      <div class="container-left">
        <header class="container-left__header">
          <div class="container-left__content">
            <img class="content-logo" src="{{ asset('img/volhub-small-logo.png') }}" />
          </div>
        </header>
        <div class="main-container-signup">
          <main class="main-content">
            <div class="content-left__text">
              <p class="content-left__text-up">Buat Akun Pribadi</p>
              <p class="content-left__text-down">Jadilah bagian dari VolHub!</p>
            </div>
            <form>
              <div class="form-signup">
                <div class="form-signup-container">
                  <div class="form-signup-item">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" required />
                  </div>
                  <div class="form-signup-item">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required />
                  </div>
                  <div class="form-signup-item">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required />
                  </div>
                  <div class="form-signup-item">
                    <label for="password">Kata Sandi</label>
                    <input
                      type="password"
                      id="password"
                      name="password"
                      required
                    />
                  </div>
                  <div class="form-signup-item">
                    <label for="nomor">Nomor Handphone</label>
                    <input type="text" id="nomor" name="nomor" required />
                  </div>
                  <div></div>
                </div>
                <div class="form-signup-container__button">
                  <button class="form-signup-button__signup">Buat Akun</button>
                  <button class="form-signup-button__login">Masuk</button>
                </div>
              </div>
            </form>
          </main>
        </div>
      </div>
      <div class="container-right">
        <div class="container-right__content">
          <img class="content__hero-image" src="/img/hero.jpg" />
          <div class="content__hero-tagline">
            <h1 class="content__hero-tagline__text">
              Muda, Bergerak, Bertindak.
            </h1>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
