<!DOCTYPE html>
<html lang="en">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--====== Title ======-->
    <title>Event Organizer</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?= base_url(); ?>/dashboard/images/favicon.svg" type="image/svg" />

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="<?= base_url(); ?>/dashboard/css/bootstrap.min.css" />

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="<?= base_url(); ?>/dashboard/css/lineicons.css" />

    <!--====== Tiny Slider css ======-->
    <link rel="stylesheet" href="<?= base_url(); ?>/dashboard/css/tiny-slider.css" />

    <!--====== gLightBox css ======-->
    <link rel="stylesheet" href="<?= base_url(); ?>/dashboard/css/glightbox.min.css" />

    <link rel="stylesheet" href="<?= base_url(); ?>/dashboard/style.css" />
</head>

<body>

    <!--====== NAVBAR NINE PART START ======-->

    <section class="navbar-area navbar-nine">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- <a class="navbar-brand" href="index.html">
                            <img src="<?= base_url(); ?>/dashboard/images/white-logo.svg" alt="Logo" />
                        </a> -->
                        <h5 class="text-light">EVENT ORGANIZER</h1>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine" aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
                                <ul class="navbar-nav me-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll active" href="#hero-area">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#services">Layanan</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="page-scroll" href="#pricing">Acara</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#clients">Pelanggan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">Kontak</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- login -->
                            <a class="btn btn-light text-primary" href="<?= base_url('login'); ?>" role="button">MASUK</a>
                            <a class="btn btn-light text-primary ms-2" href="<?= base_url('vw_register'); ?>" role="button">DAFTAR</a>
                    </nav>
                    <!-- navbar -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>

    <!--====== NAVBAR NINE PART ENDS ======-->

    <!--====== SIDEBAR PART START ======-->


    <div class="overlay-left"></div>

    <!--====== SIDEBAR PART ENDS ======-->

    <!-- Start header Area -->
    <section id="hero-area" class="header-area header-eight">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="header-content">
                        <h1>EVENT ORGANIZER JAKARTA</h1>
                        <p>
                            Kami, adalah jasa Event Planner Organizer secara Online dan Offline profesional yang siap menciptakan nuansa acara berkesan dan tentunya menjadi memori terbaik. Tim EO kami akan membantu Anda menemukan konsep terbaik untuk acara seminar, konser musik, bazaar, pernikahan, outbound dan event lain yang tidak akan terlupakan!
                        </p>
                        <div class="button">
                            <a href="javascript:void(0)" class="btn btn-primary">Selengkapnya</a>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="header-image">
                        <img src="<?= base_url(); ?>/dashboard/images/header/home.jpg" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End header Area -->



    <!--====== ABOUT FIVE PART ENDS ======-->

    <!-- ===== service-area start ===== -->
    <section id="services" class="services-area services-eight">
        <!--======  Start Section Title Five ======-->
        <div class="section-title-five">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content">
                            <h6>Layanan</h6>
                            <h2 class="fw-bold">Berbagai Layanan Jasa Event Organizer</h2>
                        </div>
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!--======  End Section Title Five ======-->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="">
                            <img src="<?= base_url(); ?>/dashboard/images/blog/seminar.jpeg" alt="Brand Logo Images" />
                        </div>
                        <div class="service-content">
                            <h4 class="mt-2">Seminar</h4>
                            <p>
                                Pertemuan atau persidangan untuk membahas suatu masalah di bawah pimpinan ahli. Ahli yang dimaksud misalnya dosen, guru besar, pakar, peneliti, dan sejenisnya.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="">
                            <img src="<?= base_url(); ?>/dashboard/images/blog/workshop.jpg" alt="Brand Logo Images" />
                        </div>
                        <div class="service-content">
                            <h4 class="mt-2">Workshop</h4>
                            <p>
                                Periode diskusi atau kerja praktik tentang topik tertentu di mana sekelompok orang berbagi pengetahuan atau pengalaman mereka. Workshop mirip dengan seminar namun umumnya jauh lebih kecil daripada konferensi.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="">
                            <img src="<?= base_url(); ?>/dashboard/images/blog/olahraga.jpeg" alt="Brand Logo Images" />
                        </div>
                        <div class="service-content">
                            <h4 class="mt-2">Event Olahraga</h4>
                            <p>
                                Sebuah hal atau pokok yang akan dilaksanakan secara terencana dan tersusun untuk tujuan olahraga
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="">
                            <img src="<?= base_url(); ?>/dashboard/images/blog/bazar.jpeg" alt="Brand Logo Images" />
                        </div>
                        <div class="service-content">
                            <h4 class="mt-2">Bazar</h4>
                            <p>
                                Pasar yang sengaja diselenggarakan untuk jangka waktu beberapa hari.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="">
                            <img src="<?= base_url(); ?>/dashboard/images/blog/pelatihan.jpeg" alt="Brand Logo Images" />
                        </div>
                        <div class="service-content">
                            <h4 class="mt-2">Pelatihan</h4>
                            <p>
                                Kegiatan melatih atau mengembangkan suatu keterampilan dan pengetahuan kepada diri sendiri atau orang lain, yang terkait dengan kompetensi tertentu yang dianggap berguna.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="">
                            <img src="<?= base_url(); ?>/dashboard/images/blog/wedding.jpg" alt="Brand Logo Images" />
                        </div>
                        <div class="service-content">
                            <h4 class="mt-2">Wedding</h4>
                            <p>
                                Upacara pengikatan janji nikah yang dirayakan atau dilaksanakan oleh dua orang pria dan wanita dengan maksud meresmikan ikatan perkawinan secara norma agama, norma hukum, dan norma sosial.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== service-area end ===== -->


    <!-- Start Pricing  Area -->
    <section id="pricing" class="services-area services-eight">
        <!--======  Start Section Title Five ======-->
        <div class="section-title-five">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content">
                            <h6>Acara</h6>
                            <h2 class="fw-bold">Acara Mendatang</h2>
                            <p>
                                Dibawah ini merupakan event akan diadakan mendatang
                            </p>

                        </div>
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!--======  End Section Title Five ======-->
        <div class="container">
            <div class="row">
                <?php
                $no = 1;
                foreach ($kegiatan as $kegiatan_) : ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services">
                            <div class="">
                                <img src="<?= base_url('gambar/' . $kegiatan_->foto_flyer); ?>" alt="">
                            </div>
                            <div class="service-content">
                                <h4 class="mt-2"><?= $kegiatan_->judul; ?></h4>
                                <p>
                                    <?= $kegiatan_->tanggal; ?>
                                </p>
                                <a href="<?= base_url("/landingpage/detail/$kegiatan_->id"); ?>" class="btn btn-primary mt-4">Selengkapnya</a>

                            </div>
                        </div>
                    </div>
                <?php
                    $no++;
                endforeach;
                ?>
            </div>
        </div>
    </section>
    <!--/ End Pricing  Area -->



    <!-- Start Cta Area -->
    <section id="call-action" class="call-action">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9">
                    <div class="inner-content">
                        <h2>We love to make perfect <br />solutions for your event</h2>
                        <p>
                            Parfait is an event organizer service provider in Jakarta for corporate events, schools, bazaars, outbound unique concepts with complete event documentation. Our crews will arrange the events in accordance with your requirements and free to open a discussion about the ideas. We committed to bring out the unforgettable experience on provided event with our solid and creative people.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cta Area -->

    <!-- Start Brand Area -->
    <div id="clients" class="brand-area section">
        <!--======  Start Section Title Five ======-->
        <div class="section-title-five">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content">
                            <h6>Pelanggan</h6>
                            <h2 class="fw-bold">Pelanggan Kami</h2>
                            <p>
                                Dibawah ini merupakan pelanggan yang pernah bekerjasama dengan kami dan yang sedang bekerjasama sampai saat ini.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!--======  End Section Title Five ======-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <div class="clients-logos">
                        <div class="single-image">
                            <img src="<?= base_url(); ?>/dashboard/images/client-logo/mandiri.jpg" alt="Brand Logo Images" />
                        </div>
                        <div class="single-image">
                            <img style="width: 100px" src="<?= base_url(); ?>/dashboard/images/client-logo/keminfo.png" alt="Brand Logo Images" />
                        </div>
                        <div class="single-image">
                            <img src="<?= base_url(); ?>/dashboard/images/client-logo/lotte.png" alt="Brand Logo Images" />
                        </div>
                        <div class="single-image">
                            <img style="width: 100px" src="<?= base_url(); ?>/dashboard/images/client-logo/kemensos.png" alt="Brand Logo Images" />
                        </div>
                        <div class="single-image">
                            <img src="<?= base_url(); ?>/dashboard/images/client-logo/gudanggaram.jpg" alt="Brand Logo Images" />
                        </div>
                        <div class="single-image">
                            <img src="<?= base_url(); ?>/dashboard/images/client-logo/nestle.jpg" alt="Brand Logo Images" />
                        </div>
                        <div class="single-image">
                            <img src="<?= base_url(); ?>/dashboard/images/client-logo/nissan.jfif" alt="Brand Logo Images" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brand Area -->

    <!-- ========================= contact-section start ========================= -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="contact-item-wrapper">
                        <div class="row">
                            <div class="col-12 col-md-6 col-xl-12">
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="lni lni-phone"></i>
                                    </div>
                                    <div class="contact-content">
                                        <h4>Kontak</h4>
                                        <p>0984537278623</p>
                                        <p>syifaramadhani2311@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-12">
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="lni lni-map-marker"></i>
                                    </div>
                                    <div class="contact-content">
                                        <h4>Alamat</h4>
                                        <p>Jl. Deposito No.12a, RW.4, Pejaten Barat</p>
                                        <p> Kec. Ps. Minggu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-12">
                                <div class="contact-item">
                                    <div class="contact-icon">
                                        <i class="lni lni-alarm-clock"></i>
                                    </div>
                                    <div class="contact-content">
                                        <h4>Jadwal</h4>
                                        <p>8 Jam / 5 Hari</p>
                                        <p>Jam Buka: 9 Pagi - 5 Sore</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="contact-form-wrapper">
                        <div class="row">
                            <div class="col-xl-10 col-lg-8 mx-auto">
                                <div class="section-title text-center">
                                    <span> Get in Touch </span>
                                    <h2>
                                        Ready to Get Started
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <form action="#" class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" id="name" placeholder="Name" required />
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" id="email" placeholder="Email" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="phone" id="phone" placeholder="Phone" required />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="subject" id="email" placeholder="Subject" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <textarea name="message" id="message" placeholder="Type Message" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="button text-center rounded-buttons">
                                        <button type="submit" class="btn primary-btn rounded-full">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= contact-section end ========================= -->

    <!-- Start Footer Area -->
    <footer class="footer-area footer-eleven">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="footer-widget f-about">
                                <div class="logo">
                                    <h4 class="text-primary">PARFAIT</h4>
                                </div>
                                <p>
                                    Kami percaya bahwa bisnis dapat membentuk dunia menjadi lebih baik, dan mereka dapat melakukannya dengan komunitas yang diisi oleh orang-orang yang kuat di dalamnya.
                                </p>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="footer-widget f-link">
                                <h5>Perusahaan</h5>
                                <ul>
                                    <li><a href="javascript:void(0)">Beranda</a></li>
                                    <li><a href="javascript:void(0)">Layanan</a></li>
                                    <li><a href="javascript:void(0)">Acara</a></li>
                                    <li><a href="javascript:void(0)">Kontak</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-2 col-md-6 col-12 offset-2">
                            <!-- Single Widget -->
                            <div class="footer-widget f-link">
                                <h5>Kantor</h5>
                                <ul>
                                    <li>Jl. Deposito No.12a, RW.4, Pejaten Bar., Kec. Ps. Minggu, Kota Jakarta Selatan,, 12510</li>
                                    <li>alexandrainovatif@gmail.com​
                                        info@kawani-profesional.com</li>
                                    <li>022 6656023
                                        +628-114-191-112</li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
    </footer>
    <!--/ End Footer Area -->




    <!--====== js ======-->
    <script src="<?= base_url(); ?>/dashboard/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/dashboard/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>/dashboard/js/main.js"></script>
    <script src="<?= base_url(); ?>/dashboard/js/tiny-slider.js"></script>


    <script>
        //===== close navbar-collapse when a  clicked
        let navbarTogglerNine = document.querySelector(
            ".navbar-nine .navbar-toggler"
        );
        navbarTogglerNine.addEventListener("click", function() {
            navbarTogglerNine.classList.toggle("active");
        });

        // ==== left sidebar toggle
        let sidebarLeft = document.querySelector(".sidebar-left");
        let overlayLeft = document.querySelector(".overlay-left");
        let sidebarClose = document.querySelector(".sidebar-close .close");

        overlayLeft.addEventListener("click", function() {
            sidebarLeft.classList.toggle("open");
            overlayLeft.classList.toggle("open");
        });
        sidebarClose.addEventListener("click", function() {
            sidebarLeft.classList.remove("open");
            overlayLeft.classList.remove("open");
        });

        // ===== navbar nine sideMenu
        let sideMenuLeftNine = document.querySelector(".navbar-nine .menu-bar");

        sideMenuLeftNine.addEventListener("click", function() {
            sidebarLeft.classList.add("open");
            overlayLeft.classList.add("open");
        });

        //========= glightbox
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });
    </script>
</body>

</html>