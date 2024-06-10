@include('user.layout.templates.header')
@include('user.layout.templates.navbar')
    
    <main>
      <div class="edit-profile__container">
        <div class="edit-profile__menu">
          <nav class="edit-profile__navigation">
            <ul>
              <li>
                <a href=""><i class="fa-solid fa-user"></i>Profile</a>
              </li>
              <li>
                <a href=""><i class="fa-solid fa-brain"></i>Kemampuan</a>
              </li>
              <li>
                <a href=""><i class="fa-solid fa-gear"></i>Pengaturan Akun</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="edit-personal__container">
          <div class="edit-personal__wrapper">
            <div class="edit-personal__picture">
              <img
                class="edit-profile__picture"
                src="{{ asset('img/profile-img2.png') }}"
              />
              <i class="fa-regular fa-pen-to-square"></i>
            </div>
            <div class="edit-personal__headline">
              <h2>Data Diri</h2>
            </div>
            <form>
              <div class="edit-personal__form__container">
                <div class="edit-personal__form">
                  <div class="edit-personal__item">
                    <label>Nama Lengkap</label>
                    <input
                      class="edit-personal__input"
                      type="text"
                      id="skill"
                      name="skill"
                      required
                    />
                  </div>
                  <div class="edit-personal__item">
                    <label>Bio</label>
                    <input
                      class="edit-personal__input"
                      type="text"
                      id="skill"
                      name="skill"
                      required
                    />
                  </div>
                  <div class="edit-personal__item">
                    <label>Nomor Telephone</label>
                    <input
                      class="edit-personal__input"
                      type="text"
                      id="skill"
                      name="skill"
                      required
                    />
                  </div>
                  <div class="edit-personal__item">
                    <label>Usia</label>
                    <input
                      class="edit-personal__input"
                      type="text"
                      id="skill"
                      name="skill"
                      required
                    />
                  </div>
                  <div class="edit-personal__item">
                    <label>Domisili</label>
                    <input
                      class="edit-personal__input"
                      type="text"
                      id="skill"
                      name="skill"
                      required
                    />
                  </div>
                  <div class="edit-personal__item">
                    <label>Gender</label>
                    <input
                      class="edit-personal__input"
                      type="text"
                      id="skill"
                      name="skill"
                      required
                    />
                  </div>
                  <div class="edit-personal__item">
                    <label>Pendidikan Terakhir</label>
                    <input
                      class="edit-personal__input"
                      type="text"
                      id="skill"
                      name="skill"
                      required
                    />
                  </div>
                  <div class="edit-personal__item">
                    <label>CV</label>
                    <input
                      class="edit-personal__input"
                      type="text"
                      id="skill"
                      name="skill"
                      required
                    />
                  </div>
                </div>
              </div>
            </form>
            <div class="edit-personal__headline">
              <h2>Tentang Saya</h2>
            </div>
            <form>
              <div class="edit-personal__form__container">
                <div class="edit-personal__form-deskripsi">
                  <textarea
                    class="edit-personal__input"
                    type="text"
                    id="skill"
                    name="skill"
                  ></textarea>
                </div>
                <button class="edit-personal__button">Simpan Perubahan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
@include('user.layout.templates.footer')
