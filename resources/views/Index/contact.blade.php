@extends('index.layouts.main')
@section('index_body')
    <!-- Breadcrumb Area -->
    <div class="tm-breadcrumb-area tm-padding-section bg-grey" data-bgimage="assets/images/breadcrumb-bg.jpg">
        <div class="container">
            <div class="tm-breadcrumb">
                <h2>İletişim</h2>
                <ul>
                    <li><a href="{{ route('index') }}">Anasayfa</a></li>
                    <li>İletişim</li>
                </ul>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->

    <!-- Contact Us -->
    <div id="tm-contactus-area" class="tm-section tm-contact-area tm-padding-section bg-white"
        data-bgimage="../../../assets/index/images/contact-us-background.png" data-white-overlay="8">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-9 col-12">
                    <div class="tm-sectiontitle text-center">
                        <h2>Bizimle İletişime Geçin</h2>
                        <span class="tm-sectiontitle-divider">
                            <img src="../../../assets/index/images/section-divider-icon.png" alt="section divider">
                        </span>
                    </div>
                </div>
            </div>

            <div class="tm-contact-top tm-scrollanim">
                <div class="row no-gutters">
                    <div class="col-lg-12">
                        <div class="tm-contact-address">
                            <h4>İletişim Bilgilerimiz</h4>
                            <div class="tm-contact-addressblock">
                                <b>Adreslerimiz: </b>
                                <br>
                                @foreach (App\Models\KeyValue::Where('key', 'address')->where('deleted', 0)->get() as $item)
                                    <p>{{ $item->value }}.</p>
                                @endforeach

                            </div>
                            <div class="tm-contact-addressblock">
                                <b>E-mail'lerimiz: </b>
                                <br>
                                @foreach (App\Models\KeyValue::Where('key', 'email')->where('deleted', 0)->get() as $item)
                                    <p><a href="mailto:{{ $item->value }}">{{ $item->value }}</a></p>
                                @endforeach


                            </div>
                            <div class="tm-contact-addressblock">
                                <b>Telefonlarımız: </b>
                                <br>
                                @foreach (App\Models\KeyValue::Where('key', 'phone')->where('deleted', 0)->get() as $item)
                                    <p><a href="tel:{{ $item->value }}">{{ $item->value }}</a></p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tm-contact-bottom tm-padding-section-top">
                <div class="row mt-50-reverse">
                    <div class="col-lg-12">
                        <div class="tm-contact-formwrapper mt-50">
                            <h3>Bizimle İletişime Geçin</h3>
                            <form id="tm-contactform" action="{{ route('contactus') }}" class="tm-contact-forminner tm-form"
                                method="POST">
                                @csrf
                                <div class="tm-form-inner">
                                    <div class="tm-form-field tm-form-fieldhalf">
                                        <input type="text" placeholder="İsim (zorunlu)" name="name" required>
                                    </div>
                                    <div class="tm-form-field tm-form-fieldhalf">
                                        <input type="email" placeholder="E-mail (zorunlu)" name="email" required>
                                    </div>
                                    <div class="tm-form-field">
                                        <textarea cols="30" rows="5" placeholder="Mesaj" name="description"></textarea>
                                    </div>
                                    <div class="tm-form-field">
                                        <button type="submit" class="tm-button tm-button-block">Gönder</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messages"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Contact Us -->
@endsection
