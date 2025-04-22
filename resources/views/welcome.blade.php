<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Halaman utama </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('user/assets/img/logo.png')}}">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{asset('user/assets/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('user/assets/css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{asset('user/assets/css/flaticon.css')}}">
            <link rel="stylesheet" href="{{asset('user/assets/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{asset('user/assets/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{asset('user/assets/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{asset('user/assets/css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{asset('user/assets/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{asset('user/assets/css/slick.css')}}">
            <link rel="stylesheet" href="{{asset('user/assets/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{asset('user/assets/css/style.css')}}">
   </head>

   <body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('user/assets/img/logo/logo.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent ">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-2">
                            <div class="logo">
                                <a href="#"><img src="{{asset('user/assets/img/logo/logo.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">

                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <main>

        <!-- Slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6 col-md-9 ">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".6s">Selamat Datang di<br>SmartMoney</h1>
                                    <p data-animation="fadeInUp" data-delay=".8s">Halo dan selamat datang di SmartMoney, platform tracker finansial yang membantu Anda mencatat, dan menganalisis keuangan dengan lebih baik. Kami memahami bahwa mengatur keuangan bisa menjadi tantangan, tetapi dengan alat yang tepat, Anda dapat mencapai kestabilan dan pertumbuhan finansial yang lebih baik!</p>
                                    <!-- Slider btn -->
                                   <div class="slider-btns">
                                        <!-- Hero-btn -->
                                        <a data-animation="fadeInLeft" data-delay="1.0s" href="{{route('dashboard')}}" class="btn radius-btn">Mulai Sekarang</a>
                                        <!-- Video Btn -->
                                        {{-- <a data-animation="fadeInRight" data-delay="1.0s" class="popup-video video-btn ani-btn" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><i class="fas fa-play"></i></a> --}}
                                   </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight" data-delay="1s">
                                    <img src="{{asset('user/assets/img/foto1.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6 col-md-9 ">
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay=".4s">App Landing Page</span>
                                    <h1 data-animation="fadeInUp" data-delay=".6s">Get things done<br>with Appco</h1>
                                    <p data-animation="fadeInUp" data-delay=".8s">Dorem ipsum dolor sitamet, consectetur adipiscing elit, sed do eiusm tempor incididunt ulabore et dolore magna aliqua.</p>
                                    <!-- Slider btn -->
                                   <div class="slider-btns">
                                        <!-- Hero-btn -->
                                        <a data-animation="fadeInLeft" data-delay="1.0s" href="industries.html" class="btn radius-btn">Download</a>
                                        <!-- Video Btn -->
                                        <a data-animation="fadeInRight" data-delay="1.0s" class="popup-video video-btn ani-btn" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><i class="fas fa-play"></i></a>
                                   </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight" data-delay="1s">
                                    <img src="{{asset('user/assets/img/hero/hero_right.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- Slider Area End -->
        <!-- Best Features Start -->
        <section class="best-features-area section-padd4" id="feature">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-8 col-lg-10">
                        <!-- Judul Bagian -->
                        <div class="row">
                            <div class="col-lg-10 col-md-10">
                                <div class="section-tittle">
                                    <h2> Keunggulan Aplikasi Tracker Financial</h2>
                                </div>
                            </div>
                        </div>
                        <!-- Deskripsi Fitur -->
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="flaticon-support"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Pencatatan Keuangan yang Terstruktur</h3>
                                        <p>Aplikasi memungkinkan pengguna mencatat pemasukan, pengeluaran, dan anggaran dengan rapi berdasarkan kategori.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="flaticon-support"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Visualisasi Laporan Otomatis</h3>
                                        <p>Data yang dimasukkan akan langsung tergambar dalam bentuk laporan—baik itu pemasukan, pengeluaran, anggaran, maupun margin (selisih).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="flaticon-support"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Dukungan Pelanggan</h3>
                                        <p>Fitur kelola anggaran membantu pengguna mengatur batas pengeluaran agar tidak boros dan lebih disiplin finansial.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="flaticon-support"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Pengelolaan Kategori Fleksibel</h3>
                                        <p>Pengguna dapat menyesuaikan kategori sesuai kebutuhan pribadi, misalnya: makan, transportasi, hiburan, dll.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Shape -->
            <div class="features-shpae d-none d-lg-block">
                <img src="{{ asset('user/assets/img/shape/best-features.png') }}" alt="Fitur Terbaik">
            </div>
        </section>
        <!-- Best Features End -->
        <!-- Services Area Start -->
        <section class="service-area sky-blue section-padding2" id="service">
            <div class="container">
                <!-- Judul Bagian -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-tittle text-center">
                            <h2>Kenapa harus pakai Smart Money ?<br></h2>
                        </div>
                    </div>
                </div>
                <!-- Deskripsi Layanan -->
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-businessman"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="#">Mengontrol Keuangan Lebih Mudah</a></h4>
                                <p>Dengan catatan pemasukan dan pengeluaran yang rapi, kamu tahu ke mana uangmu pergi setiap harinya.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption active text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-pay"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="#">Laporan Otomatis & Akurat</a></h4>
                                <p>Aplikasi ini menyajikan data keuangan dalam bentuk laporan yang jelas—kamu tidak perlu hitung manual lagi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-plane"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="#">Meningkatkan Kesadaran Finansial</a></h4>
                                <p>Kamu jadi lebih bijak dalam mengatur uang, karena tahu batasan anggaran dan sisa margin keuanganmu.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <!-- Our Customer End -->
        <!-- Available App  Start-->
        <div class="available-app-area">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-6">
                        <div class="app-caption">
                            <div class="section-tittle section-tittle3">
                                <p>Terima kasih telah mencatat keuangan Anda. Terus pantau pemasukan untuk meraih tujuan finansial Anda!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="app-img">
                            <img src="{{ asset('user/assets/img/shape/available-app.png') }}" alt="Aplikasi Kami">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Elemen Dekoratif -->
            <div class="app-shape">
                <img src="{{ asset('user/assets/img/shape/app-shape-top.png') }}" alt="" class="app-shape-top heartbeat d-none d-lg-block">
                <img src="{{ asset('user/assets/img/shape/app-shape-left.png') }}" alt="" class="app-shape-left d-none d-xl-block">
            </div>
        </div>
        <!-- Available App End-->
    </main>
    <footer>

        <!-- Footer End -->
    </footer>

	<!-- JS here -->

		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{asset('user/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>

		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{asset('user/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('user/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('user/assets/js/bootstrap.min.js')}}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{asset('user/assets/js/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{asset('user/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('user/assets/js/slick.min.js')}}"></script>
        <!-- Date Picker -->
        <script src="{{asset('user/assets/js/gijgo.min.js')}}"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{asset('user/assets/js/wow.min.js')}}"></script>
		<script src="{{asset('user/assets/js/animated.headline.js')}}"></script>
        <script src="{{asset('user/assets/js/jquery.magnific-popup.js')}}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{asset('user/assets/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('user/assets/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('user/./assets/js/jquery.sticky.js')}}"></script>

        <!-- contact js -->
        <script src="{{asset('user/assets/js/contact.js')}}"></script>
        <script src="{{asset('user/assets/js/jquery.form.js')}}"></script>
        <script src="{{asset('user/assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('user/assets/js/mail-script.js')}}"></script>
        <script src="{{asset('user/assets/js/jquery.ajaxchimp.min.js')}}"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="{{asset('user/assets/js/plugins.js')}}"></script>
        <script src="{{asset('user/assets/js/main.js')}}"></script>

    </body>
</html>
