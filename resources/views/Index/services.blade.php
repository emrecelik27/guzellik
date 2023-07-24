@extends('index.layouts.main')
@section('index_body')
    <!-- Breadcrumb Area -->
    <div class="tm-breadcrumb-area tm-padding-section bg-grey" data-bgimage="assets/images/breadcrumb-bg.jpg">
        <div class="container">
            <div class="tm-breadcrumb">
                <h2>Hizmetlerimiz</h2>
                <ul>
                    <li><a href="{{ route('index') }}">Anasayfa</a></li>
                    <li>Hizmetlerimiz</li>
                </ul>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->

    <div class="row no-gutters tm-service-wrapper">
        @foreach (App\Models\Service::Where('deleted', '0')->get() as $item)
            <div class="col-lg-4 col-md-6 col-12">
                <div class="tm-service text-center tm-scrollanim">
                    <span class="tm-service-icon">
                        <i class="flaticon-liner"></i>
                    </span>
                    <h5>{{ $item->title }}</h5>
                    <p>{{ $item->mini_description }}</p>
                    <a href="#" class="tm-readmore tm-readmore-dark">Daha Fazla</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
