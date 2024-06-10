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
        <div class="edit-skill__container">
          <div class="edit-skill__wrapper">
            <div class="edit-skill__headline">
              <h2>Kemampuan</h2>
            </div>
            <div class="edit-skill__list">
              <ul>
                <div class="edit-skill__item">
                  <li>Coffee</li>
                  <i class="fa-solid fa-trash"></i>
                </div>
                <hr />
                <div class="edit-skill__item">
                  <li>Tea</li>
                  <i class="fa-solid fa-trash"></i>
                </div>
                <hr />
                <div class="edit-skill__item">
                  <li>Milk</li>
                  <i class="fa-solid fa-trash"></i>
                </div>
                <hr />
              </ul>
            </div>
            <form>
              <div class="edit-skill__form">
                <input
                  class="edit-skill__input"
                  type="text"
                  id="skill"
                  name="skill"
                  required
                />
                <button class="edit-skill__button">Tambah Skill</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
@include('user.layout.templates.footer')
   
