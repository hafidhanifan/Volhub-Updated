@include('user.layout.templates.header')
@include('user.layout.templates.navbar')

<section class="faq">
    <div class="faq__header">
        <h1>Frequently Asked Question</h1>
    </div>
    <div class="faq__body">
        <ul>
            <li class="faq__item">
                <div class="faq__body-question">
                    <p>Apakah Volhub Gratis</p>
                    <div class="faq__body-question-icon">
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                </div>
                <div class="faq__body-answer">
                    <p>Ya, mendaftar dan menggunakan VolHub sebagai volunteer tidak dikenakan biaya</p>
                </div>
            </li>
            <li class="faq__item">
                <div class="faq__body-question">
                    <p>Bagaimana saya bisa melihat daftar kegiatan volunteer yang tersedia?</p>
                    <div class="faq__body-question-icon">
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                </div>
                <div class="faq__body-answer">
                    <p>Setelah masuk ke akun Anda, Anda dapat melihat daftar kegiatan volunteer yang tersedia di halaman "Kegiatan." Anda bisa memfilter kegiatan berdasarkan kategori, lokasi, dan tanggal.</p>
                </div>
            </li>
            <li class="faq__item">
                <div class="faq__body-question">
                    <p>Bagaimana cara saya mendaftar untuk kegiatan tertentu?</p>
                    <div class="faq__body-question-icon">
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                </div>
                <div class="faq__body-answer">
                    <p>Klik pada kegiatan yang ingin Anda ikuti, lalu klik tombol "Daftar" di halaman detail kegiatan tersebut. Anda akan menerima konfirmasi pendaftaran melalui email.</p>
                </div>
            </li>
        </ul>
    </div>
</section>

@include('user.layout.templates.footer')
