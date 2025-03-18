<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Halaman utama </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('user/assets/img/favicon.ico')}}">

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
                                        <li class="active"><a href="#"> Home</a></li>
                                        <li><a href="#feature">Feature</a></li>
                                        <li><a href="#service">Services</a></li>
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
                                    <h2>Beberapa Fitur Terbaik dari Aplikasi Kami!</h2>
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
                                        <h3>Mudah Dikustomisasi</h3>
                                        <p>Aplikasi kami dapat dengan mudah disesuaikan sesuai dengan kebutuhan Anda.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="flaticon-support"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Keamanan Maksimal</h3>
                                        <p>Dilengkapi dengan sistem keamanan tinggi untuk melindungi data dan privasi Anda.</p>
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
                                        <p>Tim kami siap membantu Anda kapan saja dengan layanan pelanggan yang responsif.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="flaticon-support"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>Desain Kreatif</h3>
                                        <p>Tampilan yang modern dan menarik untuk pengalaman pengguna yang lebih baik.</p>
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
                            <h2>Bagaimana Kami Bisa Membantu<br>Anda dengan Appco!</h2>
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
                                <h4><a href="#">Kelola dengan Mudah</a></h4>
                                <p>Aplikasi kami memudahkan Anda dalam mengelola berbagai tugas dengan efisien.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption active text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-pay"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="#">Terima Pembayaran dengan Mudah</a></h4>
                                <p>Proses pembayaran menjadi lebih cepat dan aman dengan fitur yang kami sediakan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-plane"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="#">Pesan dengan Cepat</a></h4>
                                <p>Nikmati komunikasi instan dengan fitur pesan cepat kami untuk meningkatkan produktivitas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Area End -->
        <!-- Applic App Start -->
        <div class="applic-apps section-padding2">
            <div class="container-fluid">
                <div class="row">
                    <!-- Judul dan Deskripsi -->
                    <div class="col-xl-4 col-lg-4 col-md-8">
                        <div class="single-cases-info mb-30">
                            <h3>Tangkapan Layar<br>Aplikasi Kami</h3>
                            <p>Jelajahi tampilan aplikasi kami dengan berbagai fitur yang mudah digunakan. Dirancang untuk memberikan pengalaman terbaik bagi pengguna dengan antarmuka yang menarik dan responsif.</p>
                        </div>
                    </div>
                    <!-- Galeri Gambar -->
                    <div class="col-xl-8 col-lg-8 col-md-7">
                        <div class="app-active owl-carousel">
                            <div class="single-cases-img">
                                <img src="{{ asset('user/assets/img/gallery/App1.png') }}" alt="Tampilan Aplikasi 1">
                            </div>
                            <div class="single-cases-img">
                                <img src="{{ asset('user/assets/img/gallery/App2.png') }}" alt="Tampilan Aplikasi 2">
                            </div>
                            <div class="single-cases-img">
                                <img src="{{ asset('user/assets/img/gallery/App3.png') }}" alt="Tampilan Aplikasi 3">
                            </div>
                            <div class="single-cases-img">
                                <img src="{{ asset('user/assets/img/gallery/App2.png') }}" alt="Tampilan Aplikasi 4">
                            </div>
                            <div class="single-cases-img">
                                <img src="{{ asset('user/assets/img/gallery/App1.png') }}" alt="Tampilan Aplikasi 5">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Applic App End -->
        <!-- Our Customer Start -->
        <div class="our-customer section-padd-top30">
            <div class="container-fluid">
                <div class="our-customer-wrapper">
                    <!-- Judul Bagian -->
                    <div class="row d-flex justify-content-center">
                        <div class="col-xl-8">
                            <div class="section-tittle text-center">
                                <h2>Apa Kata Pelanggan Kami</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Testimoni Pelanggan -->
                    <div class="row">
                        <div class="col-12">
                            <div class="customar-active dot-style d-flex dot-style">
                                <div class="single-customer mb-100">
                                    <div class="what-img">
                                        <img src="{{ asset('user/assets/img/shape/man1.png') }}" alt="Testimoni Pelanggan 1">
                                    </div>
                                    <div class="what-cap">
                                        <h4><a href="#">Pengalaman Terbaik dengan Aplikasi Ini!</a></h4>
                                        <p>Aplikasi ini sangat membantu saya dalam mengelola pekerjaan sehari-hari dengan mudah dan efisien. Fitur-fiturnya luar biasa!</p>
                                    </div>
                                </div>

                                <div class="single-customer mb-100">
                                    <div class="what-img">
                                        <img src="{{ asset('user/assets/img/shape/man2.png') }}" alt="Testimoni Pelanggan 2">
                                    </div>
                                    <div class="what-cap">
                                        <h4><a href="#">Sangat Direkomendasikan!</a></h4>
                                        <p>Antarmuka yang ramah pengguna dan fitur lengkap membuat aplikasi ini menjadi pilihan utama saya untuk kebutuhan bisnis.</p>
                                    </div>
                                </div>

                                <div class="single-customer mb-100">
                                    <div class="what-img">
                                        <img src="{{ asset('user/assets/img/shape/man3.png') }}" alt="Testimoni Pelanggan 3">
                                    </div>
                                    <div class="what-cap">
                                        <h4><a href="#">Luar Biasa dan Mudah Digunakan</a></h4>
                                        <p>Saya sangat puas dengan aplikasi ini. Semua fitur bekerja dengan sempurna, dan dukungan pelanggan juga sangat responsif.</p>
                                    </div>
                                </div>

                                <div class="single-customer mb-100">
                                    <div class="what-img">
                                        <img src="{{ asset('user/assets/img/shape/man2.png') }}" alt="Testimoni Pelanggan 4">
                                    </div>
                                    <div class="what-cap">
                                        <h4><a href="#">Solusi Terbaik untuk Bisnis Saya</a></h4>
                                        <p>Aplikasi ini benar-benar membantu meningkatkan produktivitas saya. Saya bisa mengelola pekerjaan dengan lebih efisien.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Customer End -->
        <!-- Available App  Start-->
        <div class="available-app-area">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-6">
                        <div class="app-caption">
                            <div class="section-tittle section-tittle3">
                                <h2>Aplikasi Kami Tersedia untuk Semua Perangkat, Unduh Sekarang!</h2>
                                <p>Nikmati pengalaman terbaik dengan aplikasi kami di berbagai perangkat. Unduh sekarang dan rasakan kemudahannya!</p>
                                <div class="app-btn">
                                    <a href="#" class="app-btn1"><img src="{{ asset('user/assets/img/shape/app_btn1.png') }}" alt="Unduh di Google Play"></a>
                                    <a href="#" class="app-btn2"><img src="{{ asset('user/assets/img/shape/app_btn2.png') }}" alt="Unduh di App Store"></a>
                                </div>
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
        <!-- Footer Start -->
        <div class="footer-main">
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-3 col-md-4 col-sm-8">
                            <div class="single-footer-caption mb-30">
                                <!-- Logo -->
                                <div class="footer-logo">
                                    <a href="#"><img src="{{ asset('user/assets/img/logo/logo2_footer.png') }}" alt="Logo Footer"></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1">Kami hadir untuk memberikan layanan terbaik dengan solusi inovatif.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Tautan Cepat</h4>
                                    <ul>
                                        <li><a href="#">Tentang Kami</a></li>
                                        <li><a href="#">Fitur</a></li>
                                        <li><a href="#">Harga</a></li>
                                        <li><a href="#">Unduh</a></li>
                                        <li><a href="#">Ulasan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Dukungan</h4>
                                    <ul>
                                        <li><a href="#">Laporkan Bug</a></li>
                                        <li><a href="#">Kebijakan Privasi</a></li>
                                        <li><a href="#">Syarat & Ketentuan</a></li>
                                        <li><a href="#">Peta Situs</a></li>
                                        <li><a href="#">FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Berlangganan Newsletter</h4>
                                    <div class="footer-pera footer-pera2">
                                        <p>Dapatkan berita dan penawaran terbaru langsung ke email Anda.</p>
                                    </div>
                                    <!-- Form -->
                                    <div class="footer-form">
                                        <div id="mc_embed_signup">
                                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                                <input type="email" name="EMAIL" id="newsletter-form-email" placeholder="Masukkan email Anda" class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan email Anda'">
                                                <div class="form-icon">
                                                    <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                        <img src="{{ asset('user/assets/img/shape/form_icon.png') }}" alt="Ikon Kirim">
                                                    </button>
                                                </div>
                                                <div class="mt-10 info"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Hak Cipta -->
                    <div class="row align-items-center">
                        <div class="col-xl-12">
                            <div class="footer-copy-right">
                                <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> Semua hak dilindungi. Dibuat dengan <i class="ti-heart" aria-hidden="true"></i> oleh <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
