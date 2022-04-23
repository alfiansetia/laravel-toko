@extends('frontend.template')


@section('content')
<section data-bs-version="5.1" class="gallery1 cid-sSG7d6JQHZ" id="gallery1-1c">


    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Gallery</strong>
            </h4>

        </div>
        <div class="row mt-4">
            @forelse($albums as $alb)
            <div class="item features-image сol-12 col-md-6 col-lg-6">
                <div class="item-wrapper">
                    <div class="item-img">
                        <div id="carouselExampleCaptions{{ $alb->id }}" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2500">
                                    <img src="{{ asset('img/album') }}/{{ $alb->img }}" class="d-block w-100" alt="{{ $alb->desc }}">
                                </div>
                                @forelse($alb->foto as $fot)
                                <div class="carousel-item" data-bs-interval="2500">
                                    <img src="{{ asset('img/foto') }}/{{ $fot->name }}" class="d-block w-100" alt="{{ $alb->desc }}">
                                </div>
                                @empty
                                @endforelse
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions{{ $alb->id }}" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions{{ $alb->id }}" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7">
                            <strong>{{ $alb->name }}</strong>
                        </h5>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">{{ $alb->desc }}</p>

                    </div>
                    <div class="mbr-section-btn item-footer mt-2">
                        <a href="{{ route('galery.detail', $alb->id) }}" class="btn btn-primary item-btn display-7">SELENGKAPNYA</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="alert alert-danger">
                <strong>Galery Kosong</strong>
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