@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Yoga Bayu AP</title>
    <meta content="Portofolio Online Yoga Bayu Anggana Pratama" name="descriptison" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon-y.png') }}" rel="icon" />
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    {{-- <script src="form.js"></script> --}}
</head>

<body>
    <!-- ======= Mobile nav toggle button ======= -->
    <button type="button" class="mobile-nav-toggle d-xl-none">
        <i class="icofont-navigation-menu"></i>
    </button>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">
        <nav class="nav-menu">
            <ul>
                <li class="active">
                    <a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a>
                </li>
                <li>
                    <a href="#about"><i class="bx bx-user"></i> <span>Tentang Saya</span></a>
                </li>
                <li>
                    <a href="#skills"><i class="bx bx-book-content"></i> <span>Skill</span></a>
                </li>
                <li>
                    <a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a>
                </li>
                <li>
                    <a href="#portfolio"><i class="bx bx-book-content"></i> <span>Portofolio</span></a>
                </li>
                <li>
                    <a href="#services"><i class="bx bx-server"></i> <span>Keterampilan</span></a>
                </li>
                <li>
                    <a href="#contact"><i class="bx bx-envelope"></i> <span>Kontak</span></a>
                </li>
            </ul>
        </nav>
        <!-- .nav-menu -->
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Yoga Bayu Anggana Pratama</h1>
            <p>
                Saya Seorang
                <span class="typed" data-typed-items="Freelancer, Teknisi, Designer, Developer"></span>
            </p>
            <div class="social-links">
                <a href="https://twitter.com/yoga_1721" class="twitter" target="_blank"><i
                        class="bx bxl-twitter"></i></a>
                <a href="https://facebook.com/bayu.angin.39" class="facebook" target="_blank"><i
                        class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/yogabayu.ap" class="instagram" target="_blank"><i
                        class="bx bxl-instagram"></i></a>
                <a href="www.linkedin.com/in/yoga-bayu-anggana-pratama" class="linkedin" target="_blank"><i
                        class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Tentang Saya</h2>
                    <p>
                        Saya adalah lulusan terbaru dari Jurusan Teknik Komputer Kontrol
                        Politeknik Negeri Madiun. Lulusan Teknik Komputer Kontrol dengan
                        pengalaman dalam desain sketsa alat dengan perangkat lunak,
                        membuat sirkuit elektronik, dan membangun perangkat IoT serta
                        mengoperasikan aplikasi pengolah data.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-4 text-center">
                        <img src="{{ asset('assets/img/profile-img.jpg') }}" class="img-fluid" alt="" />
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                        <h3>Data Diri:</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li>
                                        <i class="icofont-rounded-right"></i>
                                        <strong>Tanggal Lahir:</strong> 21 Desember 1998
                                    </li>
                                    <li>
                                        <i class="icofont-rounded-right"></i>
                                        <strong>Website:</strong> yogabayu.000webhostapp.com
                                    </li>
                                    <li>
                                        <i class="icofont-rounded-right"></i>
                                        <strong>Nomor Telepon:</strong> 089506488560
                                    </li>
                                    <li>
                                        <i class="icofont-rounded-right"></i>
                                        <strong>Kota:</strong> Ponorogo
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li>
                                        <i class="icofont-rounded-right"></i>
                                        <strong>Umur:</strong> 21
                                    </li>
                                    <li>
                                        <i class="icofont-rounded-right"></i>
                                        <strong>Email:</strong> yogabayusbi@gmail.com
                                    </li>
                                    <li>
                                        <i class="icofont-rounded-right"></i>
                                        <strong>Freelance:</strong> Available
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            Saya memiliki kemampuan untuk beradaptasi dengan lingkungan
                            kerja, dapat berkomunikasi dengan baik, menerima kritik yang
                            membangun, dan senang untuk terus belajar . Saya siap bekerja
                            untuk perusahaan, baik secara individu maupun sebagai tim.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Skills</h2>
                </div>

                <div class="row skills-content">
                    <div class="col-lg-6">
                        <div class="progress">
                            <span class="skill">Bahasa Indonesia <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">Bahasa Inggris <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">HTML <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">CSS <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">MySql <i class="val">60%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="progress">
                            <span class="skill">PHP <i class="val">70%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Electrical Support<i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">SkectUp 2D /3D<i class="val">65%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Proteus Design <i class="val">60%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Web Framework (CodeIgniter, Laravel) <i class="val">50%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Resume</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title">Pendidikan</h3>
                        <div class="resume-item">
                            <h4>Teknik Komputer Kontrol</h4>
                            <h5>2017 - 2020</h5>
                            <p><em>Politeknik Negeri Madiun</em></p>
                            <p>
                                Mempelajari banyak hal mengenai dunia elektronika dengan
                                internet. Mulai dari design dan rangkaian alat elektronika
                                hingga membuat website.
                            </p>
                        </div>
                        <div class="resume-item">
                            <h4>Teknik Komputer dan Jaringan</h4>
                            <h5>2014 - 2017</h5>
                            <p><em>SMKN 1 Slahung</em></p>
                            <p>
                                Banyak mempelajari tentang komponen komputer dan jaringan
                                serta bagaimana merakit komputer dan membuat jaringan komputer
                                yang baik dan benar
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <h3 class="resume-title">Pengalaman Magang</h3>
                        <div class="resume-item">
                            <h4>BMKG Maritim Perak 2 Surabaya</h4>
                            <h5>1 Juli 2019 - 31 Agustus 2019</h5>
                            <p>
                                <em>
                                    Melakukan tugas pencatatan nilai sensor yang digunakan di
                                    BMKG (Observer) serta membuat Prototipe alat pengukur
                                    penguapan air otomatis.
                                </em>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="resume-title">Pengalaman Kerja</h3>
                        <div class="resume-item">
                            <h4>Teknisi Jaringan</h4>
                            <h5>Januari 2021 - Sekarang</h5>
                            <p><em>Di RSUD Kertosono </em></p>
                            <ul>
                                <li><i>Troubleshooting</i> dan Pengembangan Sistem Jaringan</li>
                                <li>Melakukan Pengembangan Website</li>
                                <li><i>Troubleshooting Hardware</i></li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Freelance Penulis tutorial dan Materi IT</h4>
                            <h5>Oktober 2020 - Desember 2020</h5>
                            <p><em>Bekerja Secara Online </em></p>
                            <ul>
                                <li>Membuat Tutorial Materi HTML, JavaScript, CSS, PHP</li>
                                <li>
                                    Mendiskusikan dan mapping section baru dari daftar code yang
                                    akan dimaskukkan di web
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Portofolio</h2>
                    <p>Beberapa Koleksi Dari Hasil Saya selama ini</p>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Semua</li>
                            <li data-filter=".filter-web">Website</li>
                            <li data-filter=".filter-card">Alat</li>
                            <li data-filter=".filter-app">Aplikasi Android</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <!-- website rs-->
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/portfolio/webrs/homePage.PNG') }}" class="img-fluid"
                                alt="" />
                            <div class="portfolio-info">
                                <h4>Website</h4>
                                <p>Tampilan website RSUD Kertosono</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('assets/img/portfolio/webrs/homePage.PNG') }}"
                                        data-gall="portfolioGallery" class="venobox" title="App 1"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" data-gall="portfolioDetailsGallery" data-vbtype="iframe"
                                        class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- website rs-->
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/portfolio/webrs/blog.PNG') }}" class="img-fluid"
                                alt="" />
                            <div class="portfolio-info">
                                <h4>Website</h4>
                                <p>Tampilan website RSUD Kertosono</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('assets/img/portfolio/webrs/blog.PNG') }}"
                                        data-gall="portfolioGallery" class="venobox" title="App 1"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" data-gall="portfolioDetailsGallery" data-vbtype="iframe"
                                        class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- website rs-->
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/portfolio/webrs/pelayanan.PNG') }}" class="img-fluid"
                                alt="" />
                            <div class="portfolio-info">
                                <h4>Website</h4>
                                <p>Tampilan website RSUD Kertosono</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('assets/img/portfolio/webrs/pelayanan.PNG') }}"
                                        data-gall="portfolioGallery" class="venobox" title="App 1"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" data-gall="portfolioDetailsGallery" data-vbtype="iframe"
                                        class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- website-->
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/portfolio/web_cuacaku/homepage.png') }}" class="img-fluid"
                                alt="" />
                            <div class="portfolio-info">
                                <h4>Website</h4>
                                <p>Tampilan</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('assets/img/portfolio/web_cuacaku/homepage.png') }}"
                                        data-gall="portfolioGallery" class="venobox" title="App 1"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" data-gall="portfolioDetailsGallery" data-vbtype="iframe"
                                        class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- alat -->
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/portfolio/foto_alat/1.jpg') }}" class="img-fluid"
                                alt="" />
                            <div class="portfolio-info">
                                <h4>Alat Pengukur Cuaca</h4>
                                <p>Alat IoT</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('assets/img/portfolio/foto_alat/1.jpg') }}"
                                        data-gall="portfolioGallery" class="venobox" title="Web 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" data-gall="portfolioDetailsGallery" data-vbtype="iframe"
                                        class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- android -->
                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/portfolio/android/1.jpg') }}" class="img-fluid"
                                alt="" />
                            <div class="portfolio-info">
                                <h4>Applikasi Android</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('assets/img/portfolio/android/1.jpg') }}"
                                        data-gall="portfolioGallery" class="venobox" title="App 2"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" data-gall="portfolioDetailsGallery" data-vbtype="iframe"
                                        class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- android -->
                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/portfolio/android/2.png') }}" class="img-fluid"
                                alt="" />
                            <div class="portfolio-info">
                                <h4>Applikasi Android</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('assets/img/portfolio/android/2.png') }}"
                                        data-gall="portfolioGallery" class="venobox" title="App 2"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" data-gall="portfolioDetailsGallery" data-vbtype="iframe"
                                        class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--website-->
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/portfolio/web_cuacaku/2.png') }}" class="img-fluid"
                                alt="" />
                            <div class="portfolio-info">
                                <h4>Website</h4>
                                <p>Tampilan</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('assets/img/portfolio/web_cuacaku/2.png') }}"
                                        data-gall="portfolioGallery" class="venobox" title="App 1"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" data-gall="portfolioDetailsGallery" data-vbtype="iframe"
                                        class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--alat-->
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/portfolio/foto_alat/2.jpg') }}" class="img-fluid"
                                alt="" />
                            <div class="portfolio-info">
                                <h4>Alat Pengukur Cuaca</h4>
                                <p>Alat IoT</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('assets/img/portfolio/foto_alat/2.jpg') }}"
                                        data-gall="portfolioGallery" class="venobox" title="Web 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" data-gall="portfolioDetailsGallery" data-vbtype="iframe"
                                        class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- android -->
                    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/portfolio/android/3.png') }}" class="img-fluid"
                                alt="" />
                            <div class="portfolio-info">
                                <h4>Applikasi Android</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('assets/img/portfolio/android/3.png') }}"
                                        data-gall="portfolioGallery" class="venobox" title="App 2"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" data-gall="portfolioDetailsGallery" data-vbtype="iframe"
                                        class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--website-->
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/portfolio/web_cuacaku/4.png') }}" class="img-fluid"
                                alt="" />
                            <div class="portfolio-info">
                                <h4>Website</h4>
                                <p>Tampilan</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('assets/img/portfolio/web_cuacaku/4.png') }}"
                                        data-gall="portfolioGallery" class="venobox" title="App 1"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" data-gall="portfolioDetailsGallery" data-vbtype="iframe"
                                        class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--website-->
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/portfolio/web_cuacaku/5.png') }}" class="img-fluid"
                                alt="" />
                            <div class="portfolio-info">
                                <h4>Website</h4>
                                <p>Tampilan</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('assets/img/portfolio/web_cuacaku/5.png') }}"
                                        data-gall="portfolioGallery" class="venobox" title="App 1"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" data-gall="portfolioDetailsGallery" data-vbtype="iframe"
                                        class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--website-->
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/portfolio/web_cuacaku/3.png') }}" class="img-fluid"
                                alt="" />
                            <div class="portfolio-info">
                                <h4>Website</h4>
                                <p>Tampilan</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('assets/img/portfolio/web_cuacaku/3.png') }}"
                                        data-gall="portfolioGallery" class="venobox" title="App 1"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" data-gall="portfolioDetailsGallery" data-vbtype="iframe"
                                        class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--alat-->
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/portfolio/foto_alat/3.jpg') }}" class="img-fluid"
                                alt="" />
                            <div class="portfolio-info">
                                <h4>Alat Pengukur Cuaca</h4>
                                <p>Alat IoT</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('assets/img/portfolio/foto_alat/3.jpg') }}"
                                        data-gall="portfolioGallery" class="venobox" title="Web 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" data-gall="portfolioDetailsGallery" data-vbtype="iframe"
                                        class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--alat-->
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('assets/img/portfolio/foto_alat/4.jpg') }}" class="img-fluid"
                                alt="" />
                            <div class="portfolio-info">
                                <h4>Alat Pengukur Cuaca</h4>
                                <p>Alat IoT</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('assets/img/portfolio/foto_alat/4.jpg') }}"
                                        data-gall="portfolioGallery" class="venobox" title="Web 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="#" data-gall="portfolioDetailsGallery" data-vbtype="iframe"
                                        class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>keterampilan</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                    </path>
                                </svg>
                                <i class="bx bxl-dribbble"></i>
                            </div>
                            <h4><a href="">Design</a></h4>
                            <p>Mendesign Alat maupun website</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box iconbox-orange">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                                    </path>
                                </svg>
                                <i class="bx bx-file"></i>
                            </div>
                            <h4><a href="">Troubleshooting</a></h4>
                            <p>Perbaikan alat kelistrikan</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-pink">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                                    </path>
                                </svg>
                                <i class="bx bx-tachometer"></i>
                            </div>
                            <h4><a href="">Testing</a></h4>
                            <p>
                                Melakukan test / uji alat serta pemberian saran perbaikan alat
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box iconbox-yellow">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813">
                                    </path>
                                </svg>
                                <i class="bx bx-layer"></i>
                            </div>
                            <h4><a href="">Computer Skills</a></h4>
                            <p>
                                Dapat menggunakan berbagai macam software komputer serta
                                melakukan perbaikan terhadap komputer
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box iconbox-red">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572">
                                    </path>
                                </svg>
                                <i class="bx bx-slideshow"></i>
                            </div>
                            <h4><a href="">Team Work</a></h4>
                            <p>Dapat melakukan perkerjaan dalam tim maupun individu</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-teal">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762">
                                    </path>
                                </svg>
                                <i class="bx bx-arch"></i>
                            </div>
                            <h4><a href="">Attention to Detail</a></h4>
                            <p>Selalu detail dalam melakukan pekerjaan</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Kontak</h2>
                </div>

                <div class="row mt-1">
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p>
                                    Dukuh Gembes, RT4, RW1, Desa/Kecamatan Slahung, Ponorogo
                                    63463
                                </p>
                            </div>

                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>yogabayusbi@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Telp:</h4>
                                <p>089506488560</p>
                                <p>082131666675 (wa)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <form action="#" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Nama" data-rule="minlen:4"
                                        data-msg="Masukkan Nama anda disini" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email" data-rule="email"
                                        data-msg="Masukkan email anda disini" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Silahkan Tulis Disini"
                                    placeholder="Pesan"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Your message has been sent. Thank you!
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Kirim Pesan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Yoga Bayu Anggana Pratama</h3>
            <p>Always Go Beyond</p>
            <div class="social-links">
                <a href="https://twitter.com/yoga_1721" class="twitter" target="_blank">
                    <i class="bx bxl-twitter"></i>
                </a>
                <a href="https://facebook.com/bayu.angin.39" class="facebook" target="_blank">
                    <i class="bx bxl-facebook"></i>
                </a>
                <a href="https://www.instagram.com/yogabayu.ap" class="instagram" target="_blank">
                    <i class="bx bxl-instagram"></i>
                </a>
                <a href="www.linkedin.com/in/yoga-bayu-anggana-pratama" class="linkedin" target="_blank">
                    <i class="bx bxl-linkedin"></i>
                </a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>YogaBayuAp</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by
                <a href="https://www.instagram.com/yogabayu.ap" target="_blank">Yoga Bayu Anggana Pratama</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/typed.js/typed.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
