@extends('index.layouts.main')
@section('index_body')
    <!-- Breadcrumb Area -->
    <div class="tm-breadcrumb-area tm-padding-section bg-grey" data-bgimage="assets/images/breadcrumb-bg.jpg">
        <div class="container">
            <div class="tm-breadcrumb">
                <h2>Randevu Al</h2>
                <ul>
                    <li><a href="{{ route('index') }}">Anasayfa</a></li>
                    <li>Randevu</li>
                </ul>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->
    <div id="appointment-area" class="tm-section tm-appointment-area tm-padding-section bg-white"
        data-bgimage="../../../assets/index/images/appointment-bg.png">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6 col-12 order-2 order-lg-1">
                    <div class="tm-appointment-image tm-scrollanim">
                        <img src="../../../assets/index/images/appointment-image.png" alt="appointment image">
                    </div>
                </div>
                <div class="col-lg-6 col-12 order-1 order-lg-2">
                    <div class="tm-appointment-box">
                        <h3>Randevu Al</h3>
                        <form action="{{ route('randevuAl') }}" id="tm-appointment-form"
                            class="tm-appointment-form tm-form tm-form-whitebox" method="post">
                            @csrf
                            <div class="tm-form-inner">
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <label for="appointment-name">İsim (Zorunlu)</label>
                                    <input type="text" id="appointment-name" name="name" required>
                                </div>
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <label for="appointment-phone">Telefon (Zorunlu)</label>
                                    <input type="text" id="appointment-phone" name="phone" required>
                                </div>
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <label for="appointment-email">E-mail</label>
                                    <input type="email" id="appointment-email" name="email">
                                </div>
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <label for="appointment-date">Tarih (Zorunlu)</label>
                                    <input type="date" id="appointment-date" name="date" required>
                                </div>
                                <div class="tm-form-field">
                                    <label for="appointment-description">Mesaj</label>
                                    <textarea cols="30" rows="5" id="appointment-description" name="description"></textarea>
                                </div>
                                <div class="tm-form-field">
                                    <button type="submit" class="tm-button">Randevu Al</button>
                                </div>
                            </div>
                        </form>
                        <p class="appointment-messages"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
