@extends('frontend.template')


@section('content')

<!-- Intro -->
<section data-bs-version="5.1" class="features12 cid-sSHpxICtWP" id="features13-1q">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="card-wrapper">
                    <div class="card-box align-left">
                        <h4 class="card-title mbr-fonts-style mb-4 display-2">
                            <strong>{{ $comp->name }}</strong>
                        </h4>
                        <p class="mbr-text mbr-fonts-style mb-4 display-7">
                            {{ $comp->slogan }}
                        </p>
                        <div class="mbr-section-btn">
                            <a class="btn btn-primary display-4" target="_blank" href="https://api.whatsapp.com/send/?phone={{ $comp->wa }}&text=Halo. Saya Berminat dengan Produk anda.">
                                <span class="socicon socicon-whatsapp mbr-iconfont mbr-iconfont-btn"></span>Kirim Pesan
                            </a>
                            <a class="btn btn-secondary display-4" href="{{ route('product') }}"><span class="mobi-mbri mobi-mbri-cart-full mbr-iconfont mbr-iconfont-btn"></span>Lihat Produk
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="item mbr-flex">
                    <div class="icon-box">
                        <span class="mbr-iconfont mobi-mbri-cash mobi-mbri"></span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title mbr-black mbr-fonts-style display-7">
                            <strong>Harga</strong>
                        </h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4">Harga yang kami tawarkan sangat terjangkau dan bersaing dengan toko lain.</h5>
                    </div>
                </div>
                <div class="item mbr-flex">
                    <div class="icon-box">
                        <span class="mbr-iconfont mobi-mbri-features mobi-mbri"></span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title mbr-black mbr-fonts-style display-7">
                            <strong>Kualitas</strong>
                        </h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4">Kualitas Barang Nomor 1 dan tidak mengecewakan.</h5>
                    </div>
                </div>
                <div class="item mbr-flex">
                    <div class="icon-box">
                        <span class="mbr-iconfont mbri-delivery"></span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title mbr-black mbr-fonts-style display-7">
                            <strong>Pengiriman</strong>
                        </h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4">Pengiriman cepat dan aman oleh kami sendiri langsung ke tempat Anda.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Kontak -->
<section data-bs-version="5.1" class="contacts2 cid-sSHjcGoV4w" id="contacts2-1k">
    <!---->


    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Kontak</strong>
            </h3>

        </div>
        <div class="row justify-content-center mt-4">
            <div class="card col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-phone mobi-mbri"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-5">
                            <strong>Telephone / Whatsapp</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <a href="tel:{{ $comp->phone }}" class="text-primary">{{ $comp->phone }}</a> /
                            <a target="_blank" href="https://api.whatsapp.com/send/?phone={{ $comp->wa }}&text=Halo. Saya Berminat dengan Produk anda." class="text-primary">{{ $comp->wa }}</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-letter mobi-mbri"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-5">
                            <strong>Email</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <a href="mailto:{{ $comp->email }}" class="text-primary">{{ $comp->email }}</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-globe mobi-mbri"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-5">
                            <strong>Alamat</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            {{ $comp->address }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-bulleted-list mobi-mbri"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-5">
                            <strong>Jam Kerja</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            9:00 - 18:00 (Bebas)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map -->
<section data-bs-version="5.1" class="map1 cid-sSHje5eZPU" id="map1-1l">


    <div class="container">
        <div class="mbr-section-head mb-4">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Google Map</strong>
            </h3>

        </div>
        <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCZI5F_k6S1k46ujh0SNrapM89f7mJxd30&amp;q={{ $comp->address }}" allowfullscreen=""></iframe></div>
    </div>
</section>

<!-- Bagikan -->
<section data-bs-version="5.1" class="social1 cid-sSHjieU5On" id="share1-1m">
    <div class="container">
        <div class="media-container-row">
            <div class="col-12">
                <h3 class="mbr-section-title mb-3 align-center mbr-fonts-style display-2">
                    <strong>Bagikan Halaman Ini!</strong>
                </h3>
                <div>
                    <div class="mbr-social-likes align-center">
                        <span class="btn btn-social socicon-bg-facebook facebook m-2">
                            <i class="socicon socicon-facebook"></i>
                        </span>
                        <span class="btn btn-social twitter socicon-bg-twitter m-2">
                            <i class="socicon socicon-twitter"></i>
                        </span>
                        <span class="btn btn-social vkontakte socicon-bg-vkontakte m-2">
                            <i class="socicon socicon-vkontakte"></i>
                        </span>
                        <span class="btn btn-social odnoklassniki socicon-bg-odnoklassniki m-2">
                            <i class="socicon socicon-odnoklassniki"></i>
                        </span>
                        <span class="btn btn-social pinterest socicon-bg-pinterest m-2">
                            <i class="socicon socicon-pinterest"></i>
                        </span>
                        <span class="btn btn-social mailru socicon-bg-mail m-2">
                            <i class="socicon socicon-mail"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection