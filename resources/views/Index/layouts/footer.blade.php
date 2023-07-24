<div class="tm-footer">
    <!-- Instagram Photos -->
    <ul id="instafeed" class="tm-instaphotos"></ul>
    <!--// Instagram Photos -->

    <div class="tm-footer-toparea tm-padding-section" data-bgimage="../../../assets/index/images/footer-bgimage.jpg"
        data-white-overlay="9">
        <div class="container">
            <div class="widgets widgets-footer row">

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-widget widget-info">
                        <a class="widget-info-logo" href="index.html"><img
                                src="../../../{{ App\Models\KeyValue::Where('key', 'index_footer_logo')->first()->value ?? 'assets/index/images/logo.png' }}"
                                alt="white logo" style="height: 50px;"></a>
                        <p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod tempor
                            inci-didunt. It is a long established fact that a reader distracted.</p>
                        <ul>
                            @if (App\Models\KeyValue::Where('key', 'facebook')->first())
                                <li><a href="{{ App\Models\KeyValue::Where('key', 'facebook')->first()->value }}"><i
                                            class="ti ti-facebook"></i></a></li>
                            @endif
                            @if (App\Models\KeyValue::Where('key', 'twitter')->first())
                                <li><a href="{{ App\Models\KeyValue::Where('key', 'twitter')->first()->value }}"><i
                                            class="ti ti-twitter-alt"></i></a></li>
                            @endif
                            @if (App\Models\KeyValue::Where('key', 'instagram')->first())
                                <li><a href="{{ App\Models\KeyValue::Where('key', 'instagram')->first()->value }}"><i
                                            class="ti ti-instagram"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-widget widget-quicklinks">
                        <h4 class="widget-title">Hızlı Linkler</h4>
                        <ul>
                            <li><a href="{{ route('kurumsal') }}">Kurumsal</a></li>
                            <li><a href="{{ route('hizmetlerimiz') }}">Hizmetlerimiz</a></li>
                            <li><a href="{{ route('galeri') }}">Galeri</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Eğitimler</a></li>
                            <li><a href="{{ route('iletisim') }}">İletişim</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-widget widget-hours">
                        <h4 class="widget-title">Çalışma Saatleri</h4>
                        <p>Çalışma Saatlerimiz:</p>
                        <ul>
                            <li><span>Pazartesi</span>:
                                {{ App\Models\KeyValue::Where('key', 'pazartesi_worktime')->first()->value ?? '9.00 - 18.00' }}
                            </li>
                            <li><span>Salı</span>:
                                {{ App\Models\KeyValue::Where('key', 'sali_worktime')->first()->value ?? '9.00 - 18.00' }}
                            </li>
                            <li><span>Çarşamba</span>:
                                {{ App\Models\KeyValue::Where('key', 'carsamba_worktime')->first()->value ?? '9.00 - 18.00' }}
                            </li>
                            <li><span>Perşembe</span>:
                                {{ App\Models\KeyValue::Where('key', 'persembe_worktime')->first()->value ?? '9.00 - 18.00' }}
                            </li>
                            <li><span>Cuma</span>:
                                {{ App\Models\KeyValue::Where('key', 'cuma_worktime')->first()->value ?? '9.00 - 18.00' }}
                            </li>
                            <li><span>Cumartesi</span>:
                                {{ App\Models\KeyValue::Where('key', 'cumartesi_worktime')->first()->value ?? '9.00 - 18.00' }}
                            </li>
                            <li><span>Pazar</span>:
                                {{ App\Models\KeyValue::Where('key', 'pazar_worktime')->first()->value ?? 'Kapalı' }}
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="tm-footer-bottomarea">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <p class="tm-footer-copyright">
                        {{ App\Models\KeyValue::Where('key', 'index_footer')->first()->value ?? '© Powered By Emre Çelik. © 2023' }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
