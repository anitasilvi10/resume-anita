@extends('frontend.master')
@section('title')
    Portofolio
@endsection
@section('content')
    <div id="avatar" class="avatar">
        <div class="avatar__container d-flex flex-column justify-content-lg-between">
            <div class="avatar__block">
                <div class="avatar__logo d-flex align-items-center">
                    <div class="logo__image">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="85px" height="85px"
                            viewBox="0 0 85 85" style="enable-background:new 0 0 85 85;" xml:space="preserve"
                            class="gradient-fill">
                            <style type="text/css">
                                .gradient-fill {
                                    fill: url(#gradientFill);
                                }
                            </style>
                            <g>
                                <linearGradient id="gradientFill" gradientUnits="userSpaceOnUse" x1="9.9604"
                                    y1="75.0338" x2="75.0387" y2="9.9555">
                                    <stop offset="0" style="stop-color:var(--accent)" />
                                    <stop offset="1" style="stop-color:var(--secondary)" />
                                </linearGradient>
                                <path class="gradient-fill"
                                    d="M51,0H34C15.2,0,0,15.2,0,34v17c0,14.3,8.9,26.6,21.4,31.6c0,0,0,0,0,0l0,0C25.3,84.1,29.5,85,34,85h17
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                c6,0,11.7-1.6,16.6-4.3c0.1-0.1,0.2-0.1,0.3-0.2C78.1,74.6,85,63.6,85,51V34C85,15.2,69.8,0,51,0z M83,51c0,10.7-5.3,20.2-13.4,26
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                v-2.5v-3.9h3.9v-3.9h-3.9v-3.9h3.9v-3.9h-3.9H67v-3.9V51h-3.9v3.9v3.9h2.6v3.9v3.9v3.9h-3.9h-3.9v3.9h3.9h3.9v3.9v1
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                C61.3,81.7,56.3,83,51,83H34c-4.5,0-8.7-0.9-12.6-2.6v-2v-3.9h3.9h3.9v-3.9h-3.9h-3.9v-3.9v-3.9v-3.9H24v-3.9V51h-3.9v3.9v3.9h-2.6
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                h-3.9v3.9h3.9v3.9h-3.9v3.9h3.9v3.9v3.9C8.2,72.8,2,62.6,2,51V34C2,16.4,16.4,2,34,2h17c17.6,0,32,14.4,32,32V51z M50.1,54.9H54
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                v3.9v3.9h-3.9v-3.9V54.9z M33.1,54.9H37v3.9v3.9h-3.9v-3.9V54.9z M27.9,51H24v-3.9v-3.9v-3.9h3.9v3.9v3.9V51z M31.8,39.3h-3.9v-3.9
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                h3.9V39.3z M31.8,43.2v-3.9h3.9v3.9H31.8z M63.1,47.1V51h-3.9v-3.9v-3.9v-3.9h3.9v3.9V47.1z M35.7,47.1v-3.9h3.9h3.9h3.9h3.9v3.9
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                h-3.9h-3.9h-3.9H35.7z M59.2,39.3h-3.9v-3.9h3.9V39.3z M55.3,43.2h-3.9v-3.9h3.9V43.2z" />
                            </g>
                        </svg>
                    </div>
                    <div class="logo__caption">
                        <p>Anita Silvi<br>Ferdina</p>
                    </div>
                </div>
                <div class="avatar__image">
                    <img src="{{ asset('avatar.jpg') }}" alt="Braxton - Personal Portfolio & Resume HTML Template Avatar">
                </div>
            </div>
            <div class="avatar__block">
                <h6>
                    <small class="top">Specialization:</small>
                    Backend Developer|PHP
                </h6>
            </div>
            <div class="avatar__block">
                <h6>
                    <small class="top">Based in:</small>
                    Surabaya, Jawa Timur
                </h6>
            </div>
            <div class="avatar__block">
                <h6>
                    <small class="top">Phone</small>
                    08883020723
                </h6>
            </div>
            <div class="avatar__block">
                <h6>
                    <small class="top">Email</small>
                    anitaferdina06@gmail.com
                </h6>
            </div>
        </div>
    </div>
    <div id="content" class="content">
        <div class="content__wrapper">
            <section id="home" class="main intro">
                <div id="headline" class="headline d-flex align-items-start flex-column" data-speed="1">
                    <h1 class="headline__title animate-headline">Saya Anita Silvi Ferdina
                    </h1>
                    <p class="h2__text animate-in-up">Saya mahasiswa Sarjana Terapan Teknik Informatika di Politeknik
                        Elektronika Negeri Surabaya. Saya
                        tertarik terhadap perangkat lunak
                        menggunakan bahasa pemrograman seperti PHP, HTML, CSS, dan berpengalaman langsung menggunakan
                        Laravel untuk
                        pengembangan web, dan mengikuti course tentang pemrograman. Minat saya terletak pada pengembangan
                        Teknologi dan Produk
                        Web , serta tertarik untuk mengeksplorasi Desain UI/UX. Sebagai individu yang selalu terbuka untuk
                        belajar, saya siap terus
                        mengembangkan kemampuan diri agar dapat berkontribusi lebih baik.</p>
                    <div class="headline__btnholder d-flex flex-column flex-sm-row">
                        <a class="btn mobile-vertical btn-default btn-hover btn-hover-accent-mobile animate-headline"
                            href="#portfolio">
                            <span class="btn-caption">My Works</span>
                            <i class="ph-bold ph-squares-four"></i>
                        </a>
                        <a class="btn mobile-vertical btn-default btn-hover btn-hover-outline-mobile animate-headline"
                            href="https://drive.google.com/drive/folders/1GISwn7g0yRoSxnfLUF0wqwKqrMMpRqun?usp=sharing"
                            target="_blank"> <span class="btn-caption">Download CV</span>
                            <i class="ph-bold ph-download-simple"></i>
                        </a>
                    </div>
                </div>
                <div class="rotating-btn">
                    <a href="#portfolio" class="rotating-btn__link slide-down">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" viewBox="0 0 120 120" style="enable-background:new 0 0 120 120;"
                            xml:space="preserve" class="animate-rotation" data-value="360">
                            <defs>
                                <path id="textPath"
                                    d="M110,59.5c0,27.6-22.4,50-50,50s-50-22.4-50-50s22.4-50,50-50S110,31.9,110,59.5z" />
                            </defs>
                            <g>
                                <use xlink:href="#textPath" fill="none"></use>
                                <text>
                                    <textPath xlink:href="#textPath">Scroll for More * Scroll for More * </textPath>
                                </text>
                            </g>
                        </svg>
                        <i class="ph-bold ph-arrow-down"></i>
                    </a>
                </div>
            </section>
            <section id="portfolio" class="inner inner-first portfolio">
                <div class="content__block section-grid-title">
                    <p class="h2__subtitle animate-in-up">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="13px" height="13px"
                            viewBox="0 0 13 13" fill="currentColor">
                            <path fill="currentColor"
                                d="M5.6,12.6c-0.5-0.8-0.7-2.4-1.7-3.5c-1-1-2.7-1.2-3.5-1.7C-0.1,7-0.1,6,0.4,5.6c0.8-0.5,2.3-0.6,3.5-1.8
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              C5,2.8,5.1,1.2,5.6,0.4C6-0.1,7-0.1,7.4,0.4c0.5,0.8,0.7,2.4,1.8,3.5c1.2,1.2,2.6,1.2,3.5,1.7c0.6,0.4,0.6,1.4,0,1.7
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              C11.8,7.9,10.2,8,9.1,9.1c-1,1-1.2,2.7-1.7,3.5C7,13.1,6,13.1,5.6,12.6z" />
                        </svg>
                        <span>Portfolio</span>
                    </p>
                    <h2 class="h2__title animate-in-up">Check out my featured projects</h2>
                    <p class="h2__text animate-in-up">Proyek-proyek ini menunjukkan keahlian saya dengan contoh-contoh
                        praktis dari beberapa pekerjaan
                        saya/ Proyek-proyek
                        ini menunjukkan kemampuan saya dalam mengatasi tantangan yang rumit, beradaptasi dengan berbagai
                        teknologi, dan mengawasi proyek secara efisien.
                    </p>
                </div>
                <div class="content__block grid-block">
                    <div class="container-fluid px-0 inner__gallery">
                        <div class="row gx-0 my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                            <figure class="col-12 col-md-6 gallery__item grid-item animate-card-2"
                                itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="{{ asset('evote.png') }}" data-image="{{ asset('evote.png') }}"
                                    class="gallery__link" itemprop="contentUrl" data-size="1400x1400">
                                    <img src="{{ asset('evote.png') }}" class="gallery__image" itemprop="thumbnail"
                                        alt="Image description">
                                </a>
                                <figcaption class="gallery__descr" itemprop="caption description">
                                    <h5>E-Voting</h5>
                                    <div class="card__tags d-flex flex-wrap">
                                        <span class="rounded-tag opposite">Laravel</span>
                                        <span class="rounded-tag opposite">Tailwind</span>
                                    </div>
                                    <p class="small">E-voting merupakan sebuah aplikasi berbasis website yang diciptakan
                                        khusus untuk memfasilitasi pemilihan Ketua Himpunan Mahasiswa (KAHIMA) dan Wakil
                                        Ketua Himpunan Mahasiswa (WAKAHIMA) di Jurusan Teknik Informatika. Sistem ini
                                        menjadi sarana utama bagi seluruh mahasiswa di jurusan tersebut untuk melakukan
                                        pemilihan terhadap kandidat yang dianggap paling cocok dan berkualitas untuk
                                        memimpin organisasi mahasiswa. Melalui platform ini, mahasiswa dapat memberikan
                                        suara mereka secara elektronik, memastikan proses pemilihan yang lebih efisien,
                                        transparan, dan mudah diakses oleh seluruh anggota komunitas. Dengan adanya
                                        e-voting, proses demokrasi di lingkungan akademis terbuka secara luas, memberikan
                                        peluang yang sama bagi semua mahasiswa untuk berpartisipasi dalam menentukan
                                        pemimpin yang dianggap paling sesuai dengan visi dan misi kemajuan jurusan Teknik
                                        Informatika.
                                    </p>
                                </figcaption>
                            </figure>
                            <figure class="col-12 col-md-6 gallery__item grid-item animate-card-2"
                                itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="{{ asset('gaji.png') }}" data-image="{{ asset('gaji.png') }}"
                                    class="gallery__link" itemprop="contentUrl" data-size="1400x1400">
                                    <img src="{{ asset('gaji.png') }}" class="gallery__image" itemprop="thumbnail"
                                        alt="Image description">
                                </a>
                                <figcaption class="gallery__descr opposite" itemprop="caption description">
                                    <h5 class="opposite">Web Penggajian Karyawan</h5>
                                    <div class="card__tags d-flex flex-wrap">
                                        <span class="rounded-tag">Laravel</span>
                                        <span class="rounded-tag">Bootstraps</span>
                                    </div>
                                    <p class="small">Website Penggajian Karyawan merupakan sebuah platform daring yang
                                        dirancang khusus untuk mengelola informasi terkait pembayaran gaji dan manajemen
                                        keuangan yang berkaitan dengan karyawan dalam suatu perusahaan atau organisasi.
                                        Melalui website ini, perusahaan dapat melakukan berbagai aktivitas seperti
                                        menghitung gaji, mencatat absensi, dan menyediakan laporan keuangan terkait
                                        penggajian karyawan secara efisien. Dengan adanya platform ini, proses penggajian
                                        menjadi lebih terstruktur dan terotomatisasi, memungkinkan manajemen untuk mengakses
                                        informasi secara cepat dan akurat guna memastikan kesejahteraan finansial para
                                        karyawan dan kelancaran operasional perusahaan secara keseluruhan.
                                    </p>
                                </figcaption>
                            </figure>
                            <figure class="col-12 col-md-6 gallery__item grid-item animate-card-2"
                                itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="{{ asset('ecommerce.png') }}" data-image="{{ asset('ecommerce.png') }}"
                                    class="gallery__link" itemprop="contentUrl" data-size="1400x1400">
                                    <img src="{{ asset('ecommerce.png') }}" class="gallery__image" itemprop="thumbnail"
                                        alt="Image description">
                                </a>
                                <figcaption class="gallery__descr opposite" itemprop="caption description">
                                    <h5 class="opposite">CraftStore</h5>
                                    <div class="card__tags d-flex flex-wrap">
                                        <span class="rounded-tag">Bootstrap</span>
                                        <span class="rounded-tag">Laravel</span>
                                    </div>
                                    <p class="small">CraftStore adalah sebuah aplikasi berbasis website yang saya
                                        kembangkan sebagai proyek tugas akhir. Aplikasi ini berperan sebagai platform
                                        e-commerce yang menyediakan berbagai macam kerajinan tangan untuk dijual secara
                                        online. Tujuan utama dari CraftStore adalah untuk memberikan kemudahan bagi pengguna
                                        dalam melakukan pembelian berbagai barang kerajinan secara praktis melalui internet.
                                        Dengan konsep yang user-friendly dan navigasi yang intuitif, aplikasi ini dirancang
                                        agar dapat diakses oleh semua kalangan masyarakat, memungkinkan pengguna dari
                                        berbagai latar belakang untuk menjelajahi, memilih, dan membeli produk-produk
                                        kerajinan dengan mudah. Diharapkan bahwa CraftStore dapat memberikan pengalaman
                                        belanja yang menyenangkan serta mendukung para pengrajin lokal dalam memasarkan
                                        karya-karya kreatif mereka kepada lebih banyak orang.
                                    </p>
                                </figcaption>
                            </figure>
                            <figure class="col-12 col-md-6 gallery__item grid-item animate-card-2"
                                itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="{{ asset('tokoelektronik.png') }}"
                                    data-image="{{ asset('tokoelektronik.png') }}" class="gallery__link"
                                    itemprop="contentUrl" data-size="1400x1400">
                                    <img src="{{ asset('tokoelektronik.png') }}" class="gallery__image"
                                        itemprop="thumbnail" alt="Image description">
                                </a>
                                <figcaption class="gallery__descr " itemprop="caption description">
                                    <h5>Toko Elektronik</h5>
                                    <div class="card__tags d-flex flex-wrap">
                                        <span class="rounded-tag opposite">PHP</span>
                                        <span class="rounded-tag opposite">CSS</span>
                                    </div>
                                    <p class="small">Website toko elektronik merupakan sebuah platform digital yang
                                        didesain khusus untuk kebutuhan pengelolaan transaksi, terutama pada toko-toko yang
                                        menjual produk-produk elektronik. Dengan menggunakan website ini, pemilik toko dan
                                        kasir dapat memanfaatkan fitur-fitur seperti pencatatan penjualan, manajemen stok
                                        barang, pembuatan laporan keuangan, dan pelacakan transaksi dengan lebih efisien.
                                        Sistem ini membantu dalam menyederhanakan proses transaksi kasir, meminimalkan
                                        kesalahan dalam pencatatan, serta memberikan data yang akurat dan terperinci tentang
                                        penjualan produk elektronik.
                                    </p>
                                </figcaption>
                            </figure>
                            <figure class="col-12 col-md-6 gallery__item grid-item animate-card-2"
                                itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="{{ asset('cameris.png') }}" data-image="{{ asset('cameris.png') }}"
                                    class="gallery__link" itemprop="contentUrl" data-size="1400x1400">
                                    <img src="{{ asset('cameris.png') }}" class="gallery__image" itemprop="thumbnail"
                                        alt="Image description">
                                </a>
                                <figcaption class="gallery__descr " itemprop="caption description">
                                    <h5>Camera Comparison</h5>
                                    <div class="card__tags d-flex flex-wrap">
                                        <span class="rounded-tag opposite">Laravel</span>
                                        <span class="rounded-tag opposite">Bootstrap</span>
                                    </div>
                                    <p class="small">Cameris adalah sebuah aplikasi berbasis website yang diciptakan
                                        dengan tujuan utama untuk memberikan kemudahan kepada pengguna dalam melakukan
                                        perbandingan antara lebih dari dua kamera sekaligus. Aplikasi ini tidak hanya
                                        memungkinkan perbandingan langsung antara spesifikasi kamera, namun juga memberikan
                                        informasi yang jelas, terperinci, serta akurat mengenai setiap fitur dan
                                        karakteristik kamera yang dibandingkan. Pengguna dapat dengan mudah mengevaluasi
                                        perbedaan antara berbagai model kamera, seperti resolusi, jenis lensa, fitur
                                        fotografi yang ditawarkan, serta harga, sehingga memudahkan mereka dalam membuat
                                        keputusan yang lebih terinformasi sebelum melakukan pembelian kamera. Dengan
                                        menyediakan data yang komprehensif dan mudah diakses, Cameris bertujuan menjadi
                                        sumber informasi yang andal bagi para penggemar fotografi serta calon pembeli kamera
                                        untuk mendapatkan pemahaman yang lebih baik tentang produk kamera yang mereka
                                        minati.
                                    </p>
                                </figcaption>
                            </figure>
                            <figure class="col-12 col-md-6 gallery__item grid-item animate-card-2"
                                itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="{{ asset('GoCab.png') }}" data-image="{{ asset('GoCab.png') }}"
                                    class="gallery__link" itemprop="contentUrl" data-size="1400x1400">
                                    <img src="{{ asset('GoCab.png') }}" class="gallery__image" itemprop="thumbnail"
                                        alt="Image description">
                                </a>
                                <figcaption class="gallery__descr " itemprop="caption description">
                                    <h5>Gocab</h5>
                                    <div class="card__tags d-flex flex-wrap">
                                        <span class="rounded-tag opposite">React</span>
                                        <span class="rounded-tag opposite">Bootstrap</span>
                                    </div>
                                    <p class="small">GoCab menawarkan solusi transportasi yang terjangkau dan praktis bagi
                                        mahasiswa dengan menggunakan driver yang juga merupakan mahasiswa aktif, memastikan
                                        pengalaman berkendara yang lebih personal dan sosial. Dengan biaya lebih murah
                                        dibandingkan ojek online lainnya, pengguna dapat menikmati layanan antar makanan
                                        dari kantin serta pengiriman barang di area kampus. Sistem keamanan dan verifikasi
                                        yang ketat memberikan jaminan bahwa semua driver adalah mahasiswa, menciptakan
                                        lingkungan yang aman dan nyaman. Selain itu, tersedia pilihan driver perempuan untuk
                                        memberikan kenyamanan ekstra bagi pengguna.
                                    </p>
                                </figcaption>
                            </figure>
                            <figure class="col-12 col-md-6 gallery__item grid-item animate-card-2"
                                itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="{{ asset('simhotel.png') }}" data-image="{{ asset('simhotel.png') }}"
                                    class="gallery__link" itemprop="contentUrl" data-size="1400x1400">
                                    <img src="{{ asset('simhotel.png') }}" class="gallery__image" itemprop="thumbnail"
                                        alt="Image description">
                                </a>
                                <figcaption class="gallery__descr " itemprop="caption description">
                                    <h5>SIM-HOTEL</h5>
                                    <div class="card__tags d-flex flex-wrap">
                                        <span class="rounded-tag opposite">PHP</span>
                                        <span class="rounded-tag opposite">Bootstrap</span>
                                    </div>
                                    <p class="small">SIM-HOTEL adalah sebuah platform berbasis website yang dibuat khusus
                                        untuk kebutuhan manajemen transaksi di industri perhotelan. Didesain sebagai sistem
                                        informasi manajemen untuk kasir, website ini memfasilitasi proses pengelolaan
                                        transaksi hotel, termasuk pemesanan kamar, dan pembayaran. Melalui SIM-HOTEL, kasir
                                        dapat dengan mudah mengakses data tamu, melakukan proses check-in dan check-out,
                                        serta mengelola pembayaran dengan efisien. Fitur-fitur yang terintegrasi dalam
                                        platform ini memungkinkan pengelola hotel untuk mengontrol operasional secara lebih
                                        terarah, mengurangi kebingungan dalam pencatatan transaksi lebih cepat dan responsif
                                        kepada tamu.
                                    </p>
                                </figcaption>
                            </figure>
                            <figure class="col-12 col-md-6 gallery__item grid-item animate-card-2"
                                itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="{{ asset('viscom.png') }}" data-image="{{ asset('viscom.png') }}"
                                    class="gallery__link" itemprop="contentUrl" data-size="1400x1400">
                                    <img src="{{ asset('viscom.png') }}" class="gallery__image" itemprop="thumbnail"
                                        alt="Image description">
                                </a>
                                <figcaption class="gallery__descr " itemprop="caption description">
                                    <h5>Generator Palet Warna</h5>
                                    <div class="card__tags d-flex flex-wrap">
                                        <span class="rounded-tag opposite">Python</span>
                                        <span class="rounded-tag opposite">Flask</span>
                                        <span class="rounded-tag opposite">K-Means<< /span>
                                    </div>
                                    <p class="small">Generator Palet Warna Interaktif adalah aplikasi berbasis web yang
                                        mengotomatisasi ekstraksi palet warna dari gambar digital. Aplikasi ini menggunakan
                                        algoritma K-Means Clustering untuk mengidentifikasi warna-warna paling representatif
                                        dari sebuah gambar. Fitur utamanya meliputi pilihan metode ekstraksi (cepat/akurat),
                                        penentuan jumlah warna, pengurutan palet berdasarkan Luminansi atau Hue, dan
                                        kemampuan menyusun ulang warna secara manual melalui drag-and-drop.
                                        Pengguna juga dapat mengunduh palet dalam format JSON, CSS Variabel, atau GIMP
                                        Palette (.gpl).
                                        Aplikasi ini dirancang untuk mengoptimalkan alur kerja desain dengan menyediakan
                                        alat yang
                                        efisien, intuitif, dan user-friendly, membantu desainer menjaga
                                        konsistensi visual antar platform dan mempercepat proses eksplorasi warna.
                                    </p>
                                </figcaption>
                            </figure>
                            <figure class="col-12 col-md-6 gallery__item grid-item animate-card-2"
                                itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="{{ asset('restoran.png') }}" data-image="{{ asset('restoran.png') }}"
                                    class="gallery__link" itemprop="contentUrl" data-size="1400x1400">
                                    <img src="{{ asset('restoran.png') }}" class="gallery__image" itemprop="thumbnail"
                                        alt="Image description">
                                </a>
                                <figcaption class="gallery__descr " itemprop="caption description">
                                    <h5>Restoran</h5>
                                    <div class="card__tags d-flex flex-wrap">
                                        <span class="rounded-tag opposite">Laravel</span>
                                        <span class="rounded-tag opposite">Fuzzy Logic</span>
                                    </div>
                                    <p class="small">Aplikasi Pencarian Restoran Berbasis Web ini dikembangkan untuk
                                        membantu konsumen menemukan restoran yang sesuai dengan preferensi mereka
                                        menggunakan Logika Fuzzy Query Model Tahani. Sistem ini mengatasi kesulitan dalam
                                        memilih restoran hanya berdasarkan ulasan dan peringkat yang seringkali tidak
                                        objektif dan kurang komprehensif. Data restoran diperoleh melalui proses
                                        web scraping dari situs PergiKuliner, mencakup kriteria seperti rasa, suasana,
                                        harga, pelayanan, dan kebersihan. Setiap kriteria ini dianalisis menggunakan logika
                                        fuzzy Tahani untuk menghasilkan
                                        nilai fire strength yang menunjukkan tingkat kesesuaian restoran dengan kriteria
                                        yang dipilih, dengan skala 0 hingga 1. Hasil rekomendasi disajikan secara objektif,
                                        cepat, dan akurat , membantu pengguna membuat keputusan yang lebih terinformasi dan
                                        meningkatkan efisiensi waktu serta penghematan biaya dalam pencarian restoran.
                                    </p>
                                </figcaption>
                            </figure>
                            <figure class="col-12 col-md-6 gallery__item grid-item animate-card-2"
                                itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="{{ asset('recommender.png') }}" data-image="{{ asset('recommender.png') }}"
                                    class="gallery__link" itemprop="contentUrl" data-size="1400x1400">
                                    <img src="{{ asset('recommender.png') }}" class="gallery__image"
                                        itemprop="thumbnail" alt="Image description">
                                </a>
                                <figcaption class="gallery__descr " itemprop="caption description">
                                    <h5>Recommender.ai</h5>
                                    <div class="card__tags d-flex flex-wrap">
                                        <span class="rounded-tag opposite">laravel</span>
                                        <span class="rounded-tag opposite">Python</span>
                                    </div>
                                    <p class="small">Sistem Rekomendasi Video Pembelajaran Kecerdasan Buatan (AI) di
                                        YouTube ini dikembangkan untuk mengatasi tantangan dalam menemukan video yang
                                        relevan karena algoritma YouTube lebih mengutamakan popularitas dibandingkan
                                        kualitas edukasi. Aplikasi ini menggunakan
                                        Natural Language Processing (NLP) dengan metode BERT untuk menganalisis sentimen
                                        komentar pengguna, mengklasifikasikannya sebagai positif, negatif, atau netral.
                                        Berdasarkan analisis sentimen ini, sistem memberikan peringkat dan rekomendasi video
                                        yang lebih akurat sesuai kebutuhan pengguna. Fitur-fitur utama meliputi pengumpulan
                                        data melalui YouTube Data API v3, pra-pemrosesan data (pembersihan teks,
                                        normalisasi kata, penghapusan stopwords, dan tokenisasi) , serta
                                        konversi Speech-to-Text untuk menganalisis isi narasi video. Sistem ini juga
                                        dilengkapi dengan fitur ringkasan komentar menggunakan Gemini API dan berbagai opsi
                                        filter untuk mempermudah pengguna menemukan konten yang paling bermanfaat dan
                                        relevan. Tujuan akhirnya adalah meningkatkan efisiensi pembelajaran AI bagi pengguna
                                        dan mendorong pembuat konten untuk meningkatkan kualitas materi edukasi.
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            <section id="resume" class="inner resume">
                <div class="content__block block-large">
                    <p class="h2__subtitle animate-in-up">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="13px" height="13px"
                            viewBox="0 0 13 13" fill="currentColor">
                            <path fill="currentColor"
                                d="M5.6,12.6c-0.5-0.8-0.7-2.4-1.7-3.5c-1-1-2.7-1.2-3.5-1.7C-0.1,7-0.1,6,0.4,5.6c0.8-0.5,2.3-0.6,3.5-1.8
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              C5,2.8,5.1,1.2,5.6,0.4C6-0.1,7-0.1,7.4,0.4c0.5,0.8,0.7,2.4,1.8,3.5c1.2,1.2,2.6,1.2,3.5,1.7c0.6,0.4,0.6,1.4,0,1.7
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              C11.8,7.9,10.2,8,9.1,9.1c-1,1-1.2,2.7-1.7,3.5C7,13.1,6,13.1,5.6,12.6z" />
                        </svg>
                        <span>Resume</span>
                    </p>
                    <h2 class="h2__title animate-in-up">Pendidikan and Pengalaman Project</h2>
                </div>
                <div class="content__block block-large">
                    <div class="section-h3">
                        <h3 class="h3__title animate-in-up">Pendidikan Saya</h3>
                    </div>
                    <div class="container-fluid p-0 resume-lines">
                        <div class="row g-0 resume-lines__item animate-in-up">
                            <div class="col-12 col-md-2">
                                <span class="resume-lines__date animate-in-up">Aug 2024 - Jul 2025</span>
                            </div>
                            <div class="col-12 col-md-5">
                                <h5 class="resume-lines__title animate-in-up">Sarjana Terapan (S.Tr.) Teknik Informatika
                                </h5>
                                <p class="resume-lines__source animate-in-up">PENS -
                                    <a href="#0" class="text-link-bold" target="_blank">Politeknik Elektronika
                                        Negeri Surabaya</a>
                                </p>
                            </div>
                            <div class="col-12 col-md-5">
                                <p class="small resume-lines__descr animate-in-up"> Kampus Jl. Raya ITS, Keputih, Kec.
                                    Sukolilo, Surabaya, Jawa Timur 60111
                                </p>
                            </div>
                        </div>
                        <div class="row g-0 resume-lines__item animate-in-up">
                            <div class="col-12 col-md-2">
                                <span class="resume-lines__date animate-in-up">Aug 2024 - Jul 2025</span>
                            </div>
                            <div class="col-12 col-md-5">
                                <h5 class="resume-lines__title animate-in-up">Ahli Madya Teknik (A.Md.T.) Teknik
                                    Informatika
                                </h5>
                                <p class="resume-lines__source animate-in-up">PENS -
                                    <a href="#0" class="text-link-bold" target="_blank">Politeknik Elektronika
                                        Negeri Surabaya</a>
                                </p>
                            </div>
                            <div class="col-12 col-md-5">
                                <p class="small resume-lines__descr animate-in-up"> Kampus Jl. Raya ITS, Keputih, Kec.
                                    Sukolilo, Surabaya, Jawa Timur 60111
                                </p>
                            </div>
                        </div>
                        <div class="row g-0 resume-lines__item animate-in-up">
                            <div class="col-12 col-md-2">
                                <span class="resume-lines__date animate-in-up">2022</span>
                            </div>
                            <div class="col-12 col-md-5">
                                <h5 class="resume-lines__title animate-in-up">Rekayasa Perangkat Lunak</h5>
                                <p class="resume-lines__source animate-in-up"> SMESA -
                                    <a href="#0" class="text-link-bold" target="_blank">SMK Negeri 1 Surabaya</a>
                                </p>
                            </div>
                            <div class="col-12 col-md-5">
                                <p class="small resume-lines__descr animate-in-up">Jl. Smea No.4, Wonokromo, Kec.
                                    Wonokromo, Surabaya,
                                    Jawa Timur 60243</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content__block block-large">
                    <div class="section-h3">
                        <h3 class="h3__title animate-in-up">Pengalaman Pekerjaan</h3>
                    </div>
                    <div class="container-fluid p-0 resume-lines">
                        <div class="row g-0 resume-lines__item animate-in-up">
                            <div class="col-12 col-md-2">
                                <span class="resume-lines__date animate-in-up">Sep 2018 - Mar 2019</span>
                            </div>
                            <div class="col-12 col-md-5">
                                <h5 class="resume-lines__title animate-in-up">Software Quality Assurance</h5>
                                <p class="resume-lines__source animate-in-up">di
                                    <a href="#0" class="text-link-bold" target="_blank">Trustmedis Healthtech
                                        Solution</a>
                                </p>
                            </div>
                            <div class="col-12 col-md-5">
                                <p class="small resume-lines__descr animate-in-up">Jl. Klampis Paris Regency VI
                                    No.H34, Keputih, Kec. Sukolilo, Surabaya, Jawa Timur 60117

                                </p>
                            </div>
                        </div>
                        <div class="row g-0 resume-lines__item animate-in-up">
                            <div class="col-12 col-md-2">
                                <span class="resume-lines__date animate-in-up">Jul 2023 - Dec 2023</span>
                            </div>
                            <div class="col-12 col-md-5">
                                <h5 class="resume-lines__title animate-in-up">Backend Developer</h5>
                                <p class="resume-lines__source animate-in-up">di
                                    <a href="#0" class="text-link-bold" target="_blank">PT. Otak Kanan</a>
                                </p>
                            </div>
                            <div class="col-12 col-md-5">
                                <p class="small resume-lines__descr animate-in-up">Graha Pena, Ruang 1503, Jl. Ahmad Yani
                                    No.88, Ketintang, Kec. Gayungan, Surabaya, Jawa Timur 60234</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
