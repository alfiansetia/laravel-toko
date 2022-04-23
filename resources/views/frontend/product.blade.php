@extends('frontend.template')


@section('content')

<section data-bs-version="5.1" class="features3 cid-sSG2u6rsxb" id="features3-z">
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>{{ $sorttitle }}</strong></h4>
            <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">Silahkan pilih produk sesuai kebutuhan anda</h5>
            <form action="" method="GET" id="form_filter" class="mt-2">
                <select name="cat" id="select_filter" class="form-select form-select-lg">
                    <option value="">Pilih Semua Barang</option>
                    @foreach($catprod as $cat)
                    <option value="{{ $cat->id }}" {{ request()->get('cat') == $cat->id ? 'selected' : ''  }}>{{ $cat->name }}</option>
                    @endforeach
                </select>
            </form>
        </div>
        <div class="row mt-4">
            @forelse($product as $prod)
            <div class="item features-image сol-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="{{ asset('img/product') }}/{{ $prod->img }}">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7"><strong>{{ $prod->name }}</strong></h5>

                        <p class="mbr-text mbr-fonts-style mt-3 display-7">{{ $prod->desc }}</p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2">
                        <a href="{{ route('product.detail', $prod->id) }}" class="btn btn-primary item-btn display-7">SELENGKAPNYA</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="alert alert-danger">
                <strong>Produk {{ $sorttitle }} Kosong</strong>
            </div>
            @endforelse
        </div>
    </div>
</section>


@endsection

@push('js')

<script>
    $(document).ready(function() {
        $('#select_filter').change(function() {
            $('#form_filter').submit();
        })
    });
</script>


@endpush