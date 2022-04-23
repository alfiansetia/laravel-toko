@extends('frontend.template')


@section('content')


<!-- ingpo -->
<section data-bs-version="5.1" class="header10 cid-sSHuAZCflE" id="header10-1r">
    <div class="align-center container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-9">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1">
                    <strong>{{ $comp->name }}</strong>
                </h1>
                <p class="mbr-text mbr-fonts-style display-5">
                    {{ $comp->slogan }}&nbsp;
                </p>
                <div class="mbr-section-btn mt-3">
                    <a class="btn btn-secondary display-7" target="_blank" href="https://api.whatsapp.com/send/?phone={{ $comp->wa }}&text=Halo. Saya Berminat dengan Produk anda."><span class="socicon socicon-whatsapp mbr-iconfont mbr-iconfont-btn"></span>Hubungi Kami</a>
                    <a class="btn btn-warning display-7" href="#gallery2-19"><span class="mobi-mbri mobi-mbri-cart-full mbr-iconfont mbr-iconfont-btn"></span>Lihat Produk</a>
                </div>
                <div class="image-wrap mt-4">
                    <img src="{{ asset('img/comp') }}/{{ $comp->cover }}" alt="Mobirise" title="" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- cat produk -->
<section data-bs-version="5.1" class="gallery2 cid-sSG4entUOC" id="gallery2-19">
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>PRODUK KAMI</strong>
            </h4>
        </div>
        <div class="row mt-4">
            @foreach($catprod as $cat)
            <div class="item features-image сol-12 col-xs-6 col-sm-6 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="{{ asset('img/catprod') }}/{{ $cat->img }}" />
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5">{{ $cat->name }}</h5>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2">
                        <a href="{{ route('product') }}?cat={{ $cat->id }}" class="btn btn-primary item-btn display-7">SELENGKAPNYA</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Pilih kami -->
<section data-bs-version="5.1" class="features1 cid-sSG8v5QorZ" id="features1-1g">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>Mengapa Pilih Kami?</strong>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="card col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <div class="iconfont-wrapper">
                            <span class="mbr-iconfont mobi-mbri-cash mobi-mbri"></span>
                        </div>
                        <h5 class="card-title mbr-fonts-style display-7">
                            <strong>Harga</strong>
                        </h5>
                        <p class="card-text mbr-fonts-style display-7">
                            Harga yang kami tawarkan sangat bersaing dengan toko lain.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <div class="iconfont-wrapper">
                            <span class="mbr-iconfont mobi-mbri-features mobi-mbri"></span>
                        </div>
                        <h5 class="card-title mbr-fonts-style display-7">
                            <strong>Kualitas</strong>
                        </h5>
                        <p class="card-text mbr-fonts-style display-7">
                            Kualitas produk kami Nomor 1 tanpa mengurangi kenaikan harga.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <div class="iconfont-wrapper">
                            <span class="mbr-iconfont mbri-delivery"></span>
                        </div>
                        <h5 class="card-title mbr-fonts-style display-7">
                            <strong>Pengiriman</strong>
                        </h5>
                        <p class="card-text mbr-fonts-style display-7">
                            Barang akan kami kirim dengan aman dan cepat sampai tujuan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <div class="iconfont-wrapper">
                            <span class="mbr-iconfont mobi-mbri-like mobi-mbri"></span>
                        </div>
                        <h5 class="card-title mbr-fonts-style display-7">
                            <strong>Ready</strong>
                        </h5>
                        <p class="card-text mbr-fonts-style display-7">
                            Barang yang kami tawarkan selalu ready stok.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Galeri -->
<section data-bs-version="5.1" class="slider4 mbr-embla cid-sSHmlISYIl" id="slider4-1o">
    <div class="position-relative text-center">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Galeri</strong>
            </h4>
        </div>
        <div class="embla mt-4" data-skip-snaps="true" data-align="center" data-contain-scroll="trimSnaps" data-loop="true" data-auto-play="true" data-auto-play-interval="4" data-draggable="true">
            <div class="embla__viewport container-fluid">
                <div class="embla__container">
                    @foreach($album as $alb)
                    <div class="embla__slide slider-image item" style="margin-left: 6rem; margin-right: 6rem">
                        <div class="slide-content">
                            <div class="item-wrapper">
                                <div class="item-img">
                                    <img src="{{ asset('img/album') }}/{{ $alb->img }}" />
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="item-title mbr-fonts-style display-7">
                                    <strong>{{ $alb->name }}</strong>
                                </h5>
                            </div>
                            <div class="mbr-section-btn item-footer mt-2">
                                <a href="" class="btn item-btn btn-info display-7">Selengkapnya &gt;</a>
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

@endsection