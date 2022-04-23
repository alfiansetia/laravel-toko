<!DOCTYPE html>
<html>

<head>
    <!-- Site made with Mobirise Website Builder v5.5.5, https://mobirise.com -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="generator" content="Mobirise v5.5.5, mobirise.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <link rel="shortcut icon" href="{{ asset('img/comp') }}/{{ $comp->fav }}" type="image/x-icon" />
    <meta name="description" content="" />

    <title>{{ $comp->name }} | {{ $comp->slogan }}</title>
    <link rel="stylesheet" href="{{ asset('frontend/web/assets/mobirise-icons2/mobirise2.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/web/assets/mobirise-icons/mobirise-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/bootstrap/css/bootstrap-grid.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/bootstrap/css/bootstrap-reboot.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/animatecss/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/dropdown/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/socicon/css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/theme/css/style.css') }}" />
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" />
    </noscript>
    <link rel="preload" as="style" href="{{ asset('frontend/mobirise/css/mbr-additional.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/mobirise/css/mbr-additional.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/chat.css') }}" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    @stack('css')

</head>

<body>
    <a href="https://api.whatsapp.com/send?phone={{ $comp->wa }}&text=Halo. Saya Berminat dengan Produk anda." class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    <!-- nav -->
    <section data-bs-version="5.1" class="menu menu2 cid-sSFJHpbfIg" once="menu" id="menu2-m">
        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="">
                            <img src="{{ asset('img/comp') }}/{{ $comp->logo }}" alt="{{ $comp->name }}" style="height: 3rem" />
                        </a>
                    </span>
                    <!-- <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-7" href="">{{ $comp->name }}</a></span> -->
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                        <li class="nav-item">
                            <a class="nav-link link text-black text-primary display-4" href="{{ route('index') }}">
                                <span class="mobi-mbri mobi-mbri-home mbr-iconfont mbr-iconfont-btn"></span>BERANDA
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-black text-primary display-4" href="{{ route('product') }}">
                                <span class="mobi-mbri mobi-mbri-cart-full mbr-iconfont mbr-iconfont-btn"></span>PRODUK
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-black text-primary display-4" href="{{ route('about') }}">
                                <span class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"></span>TENTANG KAMI
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-black text-primary display-4" href="">
                                <span class="mobi-mbri mobi-mbri-photos mbr-iconfont mbr-iconfont-btn"></span>GALERI
                            </a>
                        </li>
                    </ul>

                    <div class="navbar-buttons mbr-section-btn">
                        <a class="btn btn-secondary display-4" target="_blank" href="https://api.whatsapp.com/send/?phone={{ $comp->wa }}&text=Halo. Saya Berminat dengan Produk anda."><span class="socicon socicon-whatsapp mbr-iconfont mbr-iconfont-btn"></span>
                            HUBUNGI KAMI</a>
                    </div>
                </div>
            </div>
        </nav>
    </section>


    @yield('content')

    <!-- produk unggulan -->
    <section data-bs-version="5.1" class="slider5 mbr-embla cid-sSHmqCAN2D" id="slider5-1p">
        <div class="mbr-overlay"></div>
        <div class="position-relative">
            <div class="mbr-section-head">
                <h4 class="
              mbr-section-title mbr-fonts-style
              align-center
              mb-0
              display-2
            ">
                    <strong>Produk Unggulan</strong>
                </h4>
            </div>
            <div class="embla mt-4" data-skip-snaps="true" data-align="center" data-contain-scroll="trimSnaps" data-loop="true" data-auto-play="true" data-auto-play-interval="3" data-draggable="true">
                <div class="embla__viewport container-fluid">
                    <div class="embla__container">
                        @foreach($prodfav as $fav)
                        <div class="embla__slide slider-image item" style="margin-left: 8rem; margin-right: 8rem">
                            <div class="slide-content">
                                <div class="item-img">
                                    <div class="item-wrapper">
                                        <img src="{{ asset('img/product') }}/{{ $fav->img }}" alt="" title="" />
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h5 class="item-title mbr-fonts-style display-5">
                                        <strong>{{ $fav->name }}</strong>
                                    </h5>
                                </div>
                                <div class="mbr-section-btn item-footer mt-2">
                                    <a href="{{ route('product.detail', $fav->id) }}" class="btn item-btn btn-black display-7">Selengkapnya &gt;</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <button class="embla__button embla__button--prev">
                    <span class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont" aria-hidden="true"></span>
                    <span class="sr-only visually-hidden visually-hidden">Previous</span>
                </button>
                <button class="embla__button embla__button--next">
                    <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont" aria-hidden="true"></span>
                    <span class="sr-only visually-hidden visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>


    <!-- footer -->
    <section data-bs-version="5.1" class="footer6 cid-sSHlAgk6xb" once="footers" id="footer6-1n">
        <div class="container">
            <div class="row content mbr-white">
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                        <strong>Alamat</strong>
                    </h5>
                    <p class="mbr-text mbr-fonts-style display-7">
                        <!-- Ngetrep, Kacangan,<br />
                        Todanan, Blora -->
                        {{ $comp->address }}
                    </p>
                    <br />
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 mt-4 display-7">
                        <strong>Kontak</strong>
                    </h5>
                    <p class="mbr-text mbr-fonts-style mb-4 display-7">
                        <!-- Email: support@mobirise.com <br /> -->
                        Phone/WA: <a href="https://api.whatsapp.com/send?phone={{ $comp->wa }}&text=Halo. Saya Berminat dengan Produk anda." target="_blank">{{ $comp->wa }} </a><br />
                        <!-- Fax: +1 (0) 000 0000 002 -->
                    </p>
                </div>
                <!-- <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                        <strong>Links</strong>
                    </h5>
                    <ul class="list mbr-fonts-style mb-4 display-4">
                        <li class="mbr-text item-wrap">
                            <a class="text-primary" href="https://mobirise.co/">Website builder</a>
                        </li>
                        <li class="mbr-text item-wrap">
                            <a class="text-primary" href="https://mobirise.co/">Download for Windows</a>
                        </li>
                        <li class="mbr-text item-wrap">
                            <a class="text-primary" href="https://mobirise.co/">Download for Mac</a>
                        </li>
                    </ul>
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 mt-5 display-7">
                        <strong>Feedback</strong>
                    </h5>
                    <p class="mbr-text mbr-fonts-style mb-4 display-7">
                        Please send us your ideas, bug reports, suggestions! Any feedback
                        would be appreciated.
                    </p>
                </div> -->
                <div class="col-12 col-md-6">
                    <div class="google-map">
                        <iframe frameborder="0" style="border: 0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDk89J4FSunMF33ruMVWJaJht_Ro0kvoXs&amp;q={{ $comp->address }}" allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-left">
                        <!-- <div class="soc-item">
                            <a href="https://twitter.com/" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div> -->
                        <div class="soc-item">
                            <a href="https://www.facebook.com/{{ $comp->fb }}" target="_blank">
                                <span class="socicon-facebook sociconmbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/{{ $comp->yt }}" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com/{{ $comp->ig }}" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color: #aaa; font-size: 12px; padding: 0; align-items: center; display: flex;">
        <a href="https://mobirise.site/s" style="flex: 1 1; height: 3rem; padding-left: 1rem"></a>
        <p style="flex: 0 0 auto; margin: 0; padding-right: 1rem">
            Made By Alfian -
            <a href="https://kacangan.net" style="color: #aaa">Try here</a>
        </p>
    </section>


    <!-- script -->
    <script src="{{ asset('frontend/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/smoothscroll/smooth-scroll.j') }}s"></script>
    <script src="{{ asset('frontend/ytplayer/index.js') }}"></script>
    <script src="{{ asset('frontend/dropdown/js/navbar-dropdown.js') }}"></script>
    <script src="{{ asset('frontend/embla/embla.min.js') }}"></script>
    <script src="{{ asset('frontend/embla/script.js') }}"></script>
    <script src="{{ asset('frontend/theme/js/script.js') }}"></script>
    <script src="{{ asset('frontend/chat.js') }}"></script>
    <script src="{{ asset('frontend/chat.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>

    @stack('js')

    <div id="scrollToTop" class="scrollToTop mbr-arrow-up">
        <a style="text-align: center">
            <i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i>
        </a>
    </div>

    <input name="animation" type="hidden" />
</body>

</html>