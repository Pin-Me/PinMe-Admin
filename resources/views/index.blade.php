<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PinMe</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shorBtcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css2/bootstrap.min.css">
    <link rel="stylesheet" href="css2/animate.min.css">
    <link rel="stylesheet" href="css2/magnific-popup.css">
    <link rel="stylesheet" href="fontawesome2/css/all.min.css">
    <link rel="stylesheet" href="css2/dripicons.css">
    <link rel="stylesheet" href="css2/slick.css">
    <link rel="stylesheet" href="css2/default.css">
    <link rel="stylesheet" href="css2/swiper.css">
    <link rel="stylesheet" href="css2/style.css">
    <link rel="stylesheet" href="css2/responsive.css">
    <style>
        .pricing-head {
            margin-bottom: 40px;
            /* Menambahkan margin bawah pada pricing-head */
        }
        /* Default style for the image */
        .responsive-img {
            width: 100%;
            height: auto;
            max-width: 651px;
            max-height: 750px;
        }
    </style>
</head>

<body>
    <!-- header -->
    <header class="header-area">
        <div id="header-sticky" class="menu-area">
            <div class="container">
                <div class="second-menu">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.html"><img src="img2/logo/Pinme.png" alt="logo"
                                        style="width: 154px; height: 69px;"></a>
                            </div>

                        </div>
                        <div class="col-xl-8 col-lg-9">
                            <div class="responsive"><i class="icon dripicons-align-right"></i></div>
                            <div class="main-menu text-right text-xl-right">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-sub">
                                            <a href="#parallax">Home</a>
                                        </li>
                                        <li><a href="#about">About Us</a></li>
                                        <li><a href="#features">Features</a></li>
                                        <li><a href="#screen">Screenshort</a></li>
                                        <li class="has-sub">
                                            <a href="#screen">Other</a>
                                            <ul>
                                                <li><a href="#pricing">Pricing</a></li>
                                                <li><a href="#testimonios">Testimonios</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Deatils</a></li>
                                            </ul>

                                        </li>
                                        <li><a href="#blog">Blog</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 text-right d-none d-xl-block">
                            <div class="header-btn second-header-btn">
                                <a href="https://play.google.com/store/apps/details?id=com.pkm.pinme" class="btn">Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    <!-- main-area -->
    <main>
        <!-- slider-area -->
        <section id="parallax" class="slider-area slider-bg2 second-slider-bg d-flex fix"
            style="background-image: url(img2/bg/pink-header-bg2.png); background-position:right 0; background-repeat: no-repeat; background-size: 65%;">

            <div class="slider-shape ss-one layer" data-depth="0.10"><img src="img2/shape/header-sape.png" alt="shape"></div>
            <div class="slider-shape ss-eight layer" data-depth="0.50"></div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="col-xl-2 col-lg-2"></div>
                        <div class="slider-content second-slider-content left-center">
                            <ul class="small-title mb-30">
                                <li>New</li>
                                <li>Best Mobile App</li>
                            </ul>
                            <h2 data-animation="fadeInUp" data-delay=".4s">Best Mobile App <span>Filter AR</span></h2>
                            <p data-animation="fadeInUp" data-delay=".6s">Step into a whole new experience where<br>printed media comes to life.</p>
                            <br>
                            <div class="image_wrapper">
                                <a class="image_google" href="https://play.google.com/store/apps/details?id=com.pkm.pinme">
                                    <figure class="mb-0 image_google">
                                        <img class="img-fluid" src="img/icon/bannergoogle-img2.png" alt="">
                                    </figure>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="img2/mockup/2.png" alt="shape" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!-- slider-area-end -->
        <!-- services-area -->
        <!-- <section id="about" class="services-area services-bg pt-25 pb-20"
            style="background-image: url(img/shape/header-sape2.png); background-position: right top; background-size: auto;background-repeat: no-repeat;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-10">
                        <div class="section-title text-center pl-40 pr-40 mb-45">
                            <h2>Our Features</h2>
                            <p>Quisque posuere mollis ipsum et molestie. Fusce cursus, risus vel scelerisque porttitor,
                                leo quam vulputate nibh, sit amet blandit erat magna.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-30">
                        <div class="s-single-services active text-center">
                            <div class="services-icon">
                                <img src="img/icon/f-icon1.png" />
                            </div>
                            <div class="second-services-content">
                                <h5>Perfect UI Design</h5>
                                <p>Praesent ac vehicula sapien. Sed sollicitudin molestie consequat. Ut vitae ante ut mi
                                    vehicula vulputate.</p>
                                <a href="#"><span>1</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-30">
                        <div class="s-single-services text-center">
                            <div class="services-icon">
                                <img src="img/icon/f-icon3.png" />
                            </div>
                            <div class="second-services-content">
                                <h5>Great CSS Animation</h5>
                                <p>Praesent ac vehicula sapien. Sed sollicitudin molestie consequat. Ut vitae ante ut mi
                                    vehicula vulputate.</p>
                                <a href="#"><span>2</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-30">
                        <div class="s-single-services text-center">
                            <div class="services-icon">
                                <img src="img/icon/f-icon2.png" />
                            </div>
                            <div class="second-services-content">
                                <h5>Fully Secured</h5>
                                <p>Praesent ac vehicula sapien. Sed sollicitudin molestie consequat. Ut vitae ante ut mi
                                    vehicula vulputate.</p>
                                <a href="#"><span>3</span></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section> -->
        <!-- About Us -->
        <section class="aboutus-section overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="aboutus_content">
                            <h4>About Us</h4>
                            <h2 class="mb-0 ">Mengapa Harus Memilih Kami</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="aboutus_text" data-aos="fade-left">
                            <p class="mb-0 ">
                                PinMe menawarkan digitalisasi media cetak
                                menjadi lebih hidup dan informatif ataupun
                                menarik serta memberikan engagement yang tinggi
                                melalui fitur-fitur seperti AR pada media cetak dan
                                Nearby Notification, sementara juga ramah
                                terhadap pengguna difabel dengan penjelasan
                                narasi audio dan interaksi virtual.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-area-end -->
        <!-- Features -->

        <section class="basic-feature" id="basic-feature">
            <section class="choose-area pt-100 pb-60 p-relative" style="background-image: url(img2/shape/header-sape3.png); background-position: right center; background-size: auto; background-repeat: no-repeat;">
                <div class="chosse-img responsive-bg"></div>
                <div class="chosse-img2"><img src="img2/mockup/Untitled design (1) (1).png" alt="mobile" class="img-fluid" style="width: 820px;"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="feature_wrapperright">
                                <div class="feature_content">
                                    <h4>Our Basic Features</h4>
                                    <h2>Fitur-Fitur Kami</h2>
                                </div>
                                <div class="feature_lowercontent" data-aos="fade-up">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="feature-box">
                                                <figure class="feature-marketicon">
                                                    <img src="./img2/bg/feature-marketicon.png" alt="" class="img-fluid">
                                                </figure>
                                                <h6>Teknologi Augmented Reality (AR)</h6>
                                                <p class="text-size-18 mb-0">Ciptakan pengalaman yang tak terlupakan
                                                    dengan
                                                    mengubah media cetak menjadi pemandangan interaktif yang menarik.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="feature-design">
                                                <div class="feature-box">
                                                    <figure class="feature-graphicon feature-box-2">
                                                        <img src="./img2/bg/feature-graphicon.png" alt=""
                                                            class="img-fluid">
                                                    </figure>
                                                    <h6>Nearby Notification</h6>
                                                    <p class="text-size-18 mb-0">Terhubunglah dengan konten terkini dan
                                                        relevan di
                                                        sekitar Anda secara langsung,
                                                        memastikan Anda tidak melewatkan informasi penting dan menarik
                                                        di sekitar Anda.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-downcontent">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="feature-box">
                                                    <figure class="feature-graphicon feature-box-3">
                                                        <img src="./img2/bg/feature-supporticon.png" alt=""
                                                            class="img-fluid">
                                                    </figure>
                                                    <h6>Pindai Fitur</h6>
                                                    <p class="text-size-18 mb-0">Dapatkan akses instan ke konten
                                                        tambahan,
                                                        promosi eksklusif, atau informasi yang lebih mendalam dengan
                                                        hanya memindai media cetak menggunakan kamera ponsel Anda.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="feature-design feature-guide">
                                                    <div class="feature-box">
                                                        <figure class="feature-guideicon feature-box-4">
                                                            <img src="./img2/bg/feature-guideicon.png" alt=""
                                                                class="img-fluid">
                                                        </figure>
                                                        <h6>Podium Foto</h6>
                                                        <p class="text-size-18 mb-0">
                                                            Nikmati momen-momen tak terlupakan dengan Podium Foto PinMe!
                                                            Berbagi langsung dari ponsel Anda ke feed acara,
                                                            dengan filter AR untuk tambahan keseruan!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- how-app-work -->
            <section id="features" class="app-work pt-70 pb-100 p-relative"
                style="background-image: url(img2/shape/header-sape4.png); background-position: right center; background-size: auto;background-repeat: no-repeat;">
                <div class="container">
                    <div class="row align-items-center ">

                        <div class="col-xl-6">
                            <div class="choose-wrap">
                                <div class="section-title w-title left-align mb-15">
                                    <h2>Bagaimana cara Kerja Aplikasi ini?</h2>
                                </div>
                                <div class="app-work-content mt-20">
                                    <ul>
                                        <li>
                                            <div class="icon"><img src="img2/icon/apw-Icon1.png"></div>
                                            <div class="text">
                                                <h4>Scan Barcode QR</h4>
                                                <p>Scan Barcode QR yang terdapat pada media cetak
                                                    untuk mengakses filter yang ingin digunakan

                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"><img src="img2/icon/apw-Icon2.png"></div>
                                            <div class="text">
                                                <h4>Gunakan Filter AR</h4>
                                                <p>Gunakan filter dan berikan pose terbaik mu!
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"><img src="img2/icon/apw-Icon3.png"></div>
                                            <div class="text">
                                                <h4>Biarkan Dunia Melihatmua</h4>
                                                <p>Bagikan ke dunia ataupun tamu acara
                                                    foto terbaikmu
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <img src="img2/mockup/3.png" alt="app-work-img" class="img-fluid">
                        </div>
                    </div>
                </div>
            </section>
            <!-- how-app-work -->
            <!-- video-area -->
            <section class="video-area pt-100 pb-100 p-relative" style="margin-bottom: 200px;">
                <div class="video-img2">

                    <img src="img2/bg/VideoBG.png" class="img-fluid" style="width: 80%;"/>

                    <a href="https://www.youtube.com/watch?v=v_97_GMT2aI" class="popup-video"><img
                            src="img2/bg/play-btn.png" alt="play-btn.png"></a>
                </div>
                <div class="video-img3">
                    <img src="img2/shape/header-sape5.png" class="img-fluid" alt="header-sape4">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                        </div>

                    </div>
                </div>
            </section>
            <!-- video-area-end -->
            <!-- screen-area -->
            <section id="screen" class="screen-area services-bg services-two pt-100 pb-70"
                style="background-image: url(img2/shape/header-sape4.png); background-position: right center; background-size: auto;background-repeat: no-repeat;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <br>
                        </div>
                        <div class="section-title text-center pl-40 pr-40 mb-50">
                            <h2>Our App ScreenShots</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <!-- Swiper -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="img2/gallery/SS1.jpeg" alt="slide 1" style="width: 310px; height: 635px;"></div>
                            <div class="swiper-slide"><img src="img2/gallery/SS2.jpg" alt="slide 2" style="width: 310px; height: 635px;"></div>
                            <div class="swiper-slide"><img src="img2/gallery/SS3.jpg" alt="slide 3" style="width: 310px; height: 635px;"></div>
                            <div class="swiper-slide"><img src="img2/gallery/SS4.jpg" alt="slide 4" style="width: 310px; height: 635px;"></div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
                </div>


            </section>
            <!-- screen-area-end -->
            <!-- newslater-area -->
            <section class="newslater-area pt-90 pb-100"
                style="background-image: url(img2/bg/subscribe-bg2.png);background-size: cover;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="section-title text-center pl-40 pr-40 mb-50">
                                <h2>Subscreibe For New Features</h2>
                                <p>Dapatkan informasi terkini dari kami dengan cepat
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-10">
                            <form name="ajax-form" id="contact-form4" action="#" method="post"
                                class="contact-form newslater">
                                <div class="form-group">
                                    <input class="form-control" id="email2" name="email" type="email"
                                        placeholder="Email Address..." value="" required="">
                                    <button type="submit" class="btn btn-custom" id="send2">Subscribe Now</button>
                                </div>
                                <!-- /Form-email -->
                            </form>
                        </div>

                    </div>
                </div>
            </section>
            <!-- newslater-aread-end -->

            <!-- pricing-area -->
            <section id="pricing" class="pricing-area pt-100 pb-50"
                style="background-image: url(img2/shape/header-sape7.png); background-position: right center; background-size: auto;background-repeat: no-repeat;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8">
                            <div class="section-title text-center mb-50">
                                <h2>Our Pricing Plans</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
    <!-- Menggunakan justify-content-center untuk memusatkan kotak -->
                    <div class="col-lg-3 col-md-6">
                        <div class="pricing-box text-center mb-60">
                            <div class="pricing-head">
                                <h4>Start From</h4>
                                <div class="pricing-amount">
                                    <div class="monthly_price">
                                        <span class="price">Rp. 20</span>
                                        <span class="subscription">.000</span>
                                    </div>
                                </div>
                                <h5>Filter AR 2D</h5>
                                <ul>
                                    <li>Filter AR 2D</li>
                                    <li>7 Hari Hosting</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a href="https://wa.me/6285156375966" class="btn">Start Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="pricing-box active text-center mb-60">
                            <div class="poppuler">
                                <span class="btn">Poppuler</span>
                            </div>
                            <div class="pricing-head">
                                <h4>Start From</h4>
                                <div class="pricing-amount">
                                    <div class="monthly_price">
                                        <span class="price">Rp. 50</span>
                                        <span class="subscription">.000</span>
                                    </div>
                                </div>
                                <h5>Filter AR 3D</h5>
                                <ul>
                                <li>Filter AR 3D</li>
                                    <li>14 Hari Hosting</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a href="https://wa.me/6285156375966" class="btn">Start Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="pricing-box active text-center mb-60">
                            <div class="pricing-head">
                                <h4>Start From</h4>
                                <div class="pricing-amount">
                                    <div class="monthly_price">
                                        <span class="price">Rp. 60</span>
                                        <span class="subscription">.000</span>
                                    </div>
                                </div>
                                <h5>Filter AR 4D</h5>
                                <ul>
                                <li>Filter AR 3D</li>
                                    <li>14 Hari Hosting</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a href="https://wa.me/6285156375966" class="btn">Start Now</a>
                            </div>
                        </div>
                    </div>
                </div>


                </div>
            </section>
            <!-- pricing-area-end -->

            <!-- testimonial-area -->
            <!--<section id="testimonios" class="testimonial-area testimonial-p  pt-100 pb-70"
                style="background-image:url(img/bg/client-bg2.png); background-repeat: no-repeat; background-position: right center;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section-title center-align">
                                <h2>What Our Clients Say’s</h2>
                                <p>Quisque posuere mollis ipsum et molestie. Fusce cursus, risus vel scelerisque
                                    porttitor,
                                    leo quam vulputate nibh, sit amet blandit erat magna.</p>
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <div class="testimonial-active">
                                <div class="col-xl-4">
                                    <div class="single-testimonial">
                                        <div class="testi-author text-left">
                                            <img src="img/testimonial/testi_avatar.png" alt="img">
                                            <div class="ta-info">
                                                <h6>Mr Jone Dose</h6>
                                                <span>Author</span>
                                            </div>
                                        </div>
                                        <div class="qutation"><img src="img/bg/qutation.png" alt="qutation.png"></div>

                                        <p>Praesent fermentum nisl at ipsum fcilisis viverra elementum accumsan finibus.
                                            Cras placerat lacinia mitincidunt sit amet venenatis.</p>

                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="single-testimonial">
                                        <div class="testi-author text-left">
                                            <img src="img/testimonial/testi_avatar2.png" alt="img">
                                            <div class="ta-info">
                                                <h6>Mr Jone Dose</h6>
                                                <span>Author</span>
                                            </div>
                                        </div>
                                        <div class="qutation"><img src="img/bg/qutation.png" alt="qutation.png"></div>
                                        <p>Praesent fermentum nisl at ipsum fcilisis viverra elementum accumsan finibus.
                                            Cras placerat lacinia mitincidunt sit amet venenatis.</p>


                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="single-testimonial">
                                        <div class="testi-author text-left">
                                            <img src="img/testimonial/testi_avatar3.png" alt="img">
                                            <div class="ta-info">
                                                <h6>Mr Jone Dose</h6>
                                                <span>Web Developer</span>
                                            </div>
                                        </div>
                                        <div class="qutation"><img src="img/bg/qutation.png" alt="qutation.png"></div>
                                        <p>Praesent fermentum nisl at ipsum fcilisis viverra elementum accumsan finibus.
                                            Cras placerat lacinia mitincidunt sit amet venenatis.</p>

                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="single-testimonial">
                                        <div class="testi-author text-left">
                                            <img src="img/testimonial/testi_avatar.png" alt="img">
                                            <div class="ta-info">
                                                <h6>Mr Jone Dose</h6>
                                                <span>Web Developer</span>
                                            </div>
                                        </div>
                                        <div class="qutation"><img src="img/bg/qutation.png" alt="qutation.png"></div>
                                        <p>Praesent fermentum nisl at ipsum fcilisis viverra elementum accumsan finibus.
                                            Cras placerat lacinia mitincidunt sit amet venenatis.</p>

                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="single-testimonial">
                                        <div class="testi-author text-left">
                                            <img src="img/testimonial/testi_avatar2.png" alt="img">
                                            <div class="ta-info">
                                                <h6>Mr Jone Dose</h6>
                                                <span>Web Developer</span>
                                            </div>
                                        </div>
                                        <div class="qutation"><img src="img/bg/qutation.png" alt="qutation.png"></div>
                                        <p>Praesent fermentum nisl at ipsum fcilisis viverra elementum accumsan finibus.
                                            Cras placerat lacinia mitincidunt sit amet venenatis.</p>

                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->


            <!-- blog-area -->
            <!-- <section id="blog" class="blog-area p-relative pt-70"
                style="background-image: url(img/shape/header-sape8.png); background-position: right center; background-size: auto;background-repeat: no-repeat;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-10">
                            <div class="section-title text-center mb-50">
                                <h2>Our Latest Blog & News</h2>
                                <p>Quisque posuere mollis ipsum et molestie. Fusce cursus, risus vel scelerisque
                                    porttitor,
                                    leo quam vulputate nibh, sit amet blandit erat magna.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="single-post mb-30">
                                <div class="blog-thumb">
                                    <a href="blog-details.html"><img src="img/blog/inner_b1.jpg" alt="img"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="b-meta mb-40">
                                        <ul>
                                            <li><a href="#">20 jan 2019</a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="blog-details.html">Making Distribut Product Team
                                            Work More With Monday</a></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisi
                                        cing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="admin">
                                        <ul>
                                            <li><img src="img/blog/admin-img.png" alt="test"></li>
                                            <li>
                                                <h6>Jhon Abraham</h6> Author
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="single-post mb-30">
                                <div class="blog-thumb">
                                    <a href="blog-details.html"><img src="img/blog/inner_b2.jpg" alt="img"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="b-meta mb-40">
                                        <ul>
                                            <li><a href="#">20 jan 2019</a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="blog-details.html">Monthly Web Development Upto Cost Of JavaScript
                                            Ethics</a></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisi
                                        cing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="admin">
                                        <ul>
                                            <li><img src="img/blog/admin-img.png" alt="test"></li>
                                            <li>
                                                <h6>Jhon Abraham</h6> Author
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="single-post mb-30">
                                <div class="blog-thumb">
                                    <a href="blog-details.html"><img src="img/blog/inner_b3.jpg" alt="img"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="b-meta mb-40">
                                        <ul>
                                            <li><a href="#">20 jan 2019</a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="blog-details.html">User Experience Psychology And Performance
                                            Smashing</a>
                                    </h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisi
                                        cing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="admin">
                                        <ul>
                                            <li><img src="img/blog/admin-img.png" alt="test"></li>
                                            <li>
                                                <h6>Jhon Abraham</h6> Author
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area contact-bg  pt-50 pb-100 p-relative fix"
                style="background-image: url(img2/shape/header-sape8.png); background-position: right center; background-size: auto;background-repeat: no-repeat;">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-img2">
                                <img src="img2/bg/illustration.png" alt="test">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-title mb-40">
                                <h2>Get In Touch</h2>
                                <p>Order now and get the best deals!</p>
                            </div>
                            <a href="https://wa.me/6285156375966" target="_blank"><img src="img2/logo/WA.png" alt="wa"
                                    style="width: 300px; height: 300px;"></a>
                        </div>

                    </div>

                </div>

            </section>
            <!-- contact-area-end -->
    </main>
    <!-- main-area-end -->
    <!-- footer -->
    <footer class=" footer-bg footer-p pt-60"
        style="background-image: url(img2/bg/f-bg2.png); background-position: center top; background-size: auto;background-repeat: no-repeat;">

        <div class="footer-top">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="footer-widget mb-30">
                            <div class="logo mt-15 mb-15">
                                <a href="index.html"><img src="img2/logo/Pinme2.png" alt="logo"
                                        style="width: 154px; height: 69px;"></a>
                            </div>
                            <div class="footer-text mb-20">
                                <p>Step into a whole new experience where
                                    printed media comes to life.</p>
                            </div>
                            <div class="footer-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="footer-widget mb-30">
                            <div class="f-widget-title">
                                <h5>Company News</h5>
                            </div>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="#">Partners</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="#">Reviews</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="footer-widget mb-30">
                            <div class="f-widget-title">
                                <h5>Useful Links</h5>
                            </div>
                            <div class="footer-link">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Project</a></li>
                                    <li><a href="#">Our Team</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="footer-widget mb-30">
                            <div class="f-widget-title">
                                <h5>Contact Us</h5>
                            </div>
                            <div class="footer-link">
                                <div class="f-contact">
                                    <ul>
                                        <li>
                                            <i class="icon dripicons-phone"></i>
                                            <span>0851-5637-5966
                                        </li>
                                        <li>
                                            <i class="icon dripicons-mail"></i>
                                            <span><a
                                                    href="mailto:Ahmadtajali61@gmail.com">Ahmadtajali61@gmail.com</a><br><a
                                                    </li>
                                        <li>
                                            <i class="fal fa-map-marker-alt"></i>
                                            <span>Jalan Ahmad Yani KM. 36, Kota Banjar Baru,
                                                Kalimantan Selatan 70714</span>
                                        </li>
                                    </ul>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright-text">
                            <p>&copy; 2024 @PinMe</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->


    <!-- JS here -->
    <script src="js2/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js2/vendor/jquery-1.12.4.min.js"></script>
    <script src="js2/popper.min.js"></script>
    <script src="js2/bootstrap.min.js"></script>
    <script src="js2/one-page-nav-min.js"></script>
    <script src="js2/slick.min.js"></script>
    <script src="js2/ajax-form.js"></script>
    <script src="js2/paroller.js"></script>
    <script src="js2/wow.min.js"></script>
    <script src="js2/js_isotope.pkgd.min.js"></script>
    <script src="js2/imagesloaded.min.js"></script>
    <script src="js2/parallax.min.js"></script>
    <script src="js2/jquery.waypoints.min.js"></script>
    <script src="js2/jquery.counterup.min.js"></script>
    <script src="js2/jquery.scrollUp.min.js"></script>
    <script src="js2/typed.js"></script>
    <script src="js2/parallax-scroll.js"></script>
    <script src="js2/jquery.magnific-popup.min.js"></script>
    <script src="js2/element-in-view.js"></script>
    <script src="js2/swiper.min.js"></script>
    <script src="js2/main.js"></script>



</body>

</html>
