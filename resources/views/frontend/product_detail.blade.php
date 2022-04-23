@extends('frontend.template')


@section('content')

<section data-bs-version="5.1" class="features6 cid-sSG3gm7HeX" id="features7-12">
    <!---->

    <div class="container">
        <div class="card-wrapper">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="image-wrapper">
                        <img src="{{ asset('img/product') }}/{{ $product->img }}" alt="{{ $product->name }}" />
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