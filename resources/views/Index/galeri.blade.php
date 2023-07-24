@extends('index.layouts.main')
@section('index_body')
    <!-- Breadcrumb Area -->
    <div class="tm-breadcrumb-area tm-padding-section bg-grey" data-bgimage="assets/images/breadcrumb-bg.jpg">
        <div class="container">
            <div class="tm-breadcrumb">
                <h2>Galeri</h2>
                <ul>
                    <li><a href="{{ route('index') }}">Anasayfa</a></li>
                    <li>Galeri</li>
                </ul>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->

    <div class="row tm-portfolio-wrapper mt-30-reverse">

        @foreach (App\Models\Galeri::Where('deleted', '0')->get() as $item)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mt-30">
                <div class="tm-portfolio tm-scrollanim">
                    <a href="../../../{{ $item->image_url }}" data-fancybox="portfolio-gallery"
                        data-caption="Self makeup at home">
                        <img src="../../../{{ $item->image_url }}" alt="portfolio image">
                    </a>
                    <span class="tm-portfolio-icon"><i class="ti ti-fullscreen"></i></span>
                </div>
            </div>
        @endforeach


    </div>
@endsection
