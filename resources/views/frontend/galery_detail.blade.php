@extends('frontend.template')


@section('content')


<section data-bs-version="5.1" class="gallery1 cid-sTa8qk5PL0" id="gallery1-1t">


    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Gallery {{ $album->name }}</strong>
            </h4>
            <p class="mbr-text mbr-fonts-style align-center display-6">
                {{ $album->desc }}&nbsp;
            </p>

        </div>
        <div class="row mt-4">
            @forelse($album->foto as $foto )
            <div class="item features-image сol-12 col-md-6 col-lg-6">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="{{ asset('img/foto') }}/{{ $foto->name }}">
                    </div>
                </div>

            </div>
            @empty
            <div class="alert alert-danger">
                <strong>Foto belum tersedia</strong>
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