@extends('frontend.template')


@section('content')

<section data-bs-version="5.1" class="features6 cid-sSG3gm7HeX" id="features7-12">
    <!---->
    <div class="container">
        <div class="card-wrapper">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="image-wrapper">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2500">
                                    <img src="{{ asset('img/product') }}/{{ $product->img }}" class="d-block w-100" alt="{{ $product->desc }}">
                                </div>
                                @forelse($product->fotoprod as $key => $prod)
                                <div class="carousel-item" data-bs-interval="2500">
                                    <img src="{{ asset('img/fotoprod') }}/{{ $prod->name }}" class="d-block w-100" alt="{{ $product->desc }}">
                                </div>
                                @empty
                                @endforelse
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="text-box">
                        <h5 class="mbr-title mbr-fonts-style display-2">
                            <strong>{{ $product->name }}</strong>
                        </h5>
                        <p class="mbr-text mbr-fonts-style display-7">
                            {{ $product->desc }}
                        </p>
                        <div class="cost">
                            <span class="currentcost mbr-fonts-style pr-2 display-2">Rp. {{ $product->price }}</span>
                            <!-- <span class="oldcost mbr-fonts-style display-2">$89</span> -->
                        </div>
                        <div class="mbr-section-btn pt-3">
                            <a target="_blank" href="https://api.whatsapp.com/send/?phone={{ $comp->wa }}&text=Halo. Saya Berminat dengan Produk {{ $product->name }}." class="btn btn-primary display-4">BELI SEKARANG</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection