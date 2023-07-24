@extends('index.layouts.main')
@section('index_body')
    <!-- Breadcrumb Area -->
    <div class="tm-breadcrumb-area tm-padding-section bg-grey" data-bgimage="assets/images/breadcrumb-bg.jpg">
        <div class="container">
            <div class="tm-breadcrumb">
                <h2>Kurumsal</h2>
                <ul>
                    <li><a href="{{ route('index') }}">Anasayfa</a></li>
                    <li>Kurumsal</li>
                </ul>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->
    <main class="page-content">

        <!-- Products Wrapper -->
        <div class="tm-products-area tm-section tm-padding-section bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 order-1 order-lg-2">
                        <div class="tab-content" id="prodetails-content">
                            <div class="" id="prodetails-area1" role="tabpanel"
                                aria-labelledby="prodetails-area1-tab">
                                <div class="tm-prodetails-description">
                                    <h3>{{ App\Models\KeyValue::Where('key', 'kurumsal_title')->first()->value ?? 'Kurumsal' }}
                                    </h3>
                                    <p>{{ App\Models\KeyValue::Where('key', 'kurumsal')->first()->value ?? 'Kurumsal' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Products Wrapper -->

    </main>
@endsection
