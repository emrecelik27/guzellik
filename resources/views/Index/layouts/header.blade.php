<div id="tm-home-area" class="tm-header tm-header-sticky">

    <div class="tm-header-toparea">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <ul class="tm-header-info">
                        <li><i class="ti ti-mobile"></i><b>İletişim:</b> <a
                                href="tel:{{ App\Models\KeyValue::Where('key', 'phone')->where('deleted', 0)->first()->value ?? '' }}">{{ App\Models\KeyValue::Where('key', 'phone')->where('deleted', 0)->first()->value ?? '' }}
                            </a></li>
                        <li><i class="ti ti-time"></i><b>Çalışma Saati:</b>
                            {{ App\Models\KeyValue::Where('key', 'general_worktime')->first()->value ?? '9.00 - 18.00' }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="tm-header-bottomarea">
        <div class="container">
            <div class="tm-header-bottominside">
                <div class="tm-header-searcharea">
                    <form action="#">
                        <input type="text" placeholder="Enter search keyword..">
                        <button type="submit"><i class="ti ti-search"></i></button>
                    </form>
                    <button class="tm-header-searchclose"><i class="ti ti-close"></i></button>
                </div>
                <div class="tm-header-inner">
                    <a href="{{ route('index') }}" class="tm-header-logo">
                        <img src="../../../{{ App\Models\KeyValue::Where('key', 'index_main_logo')->first()->value ?? 'assets/index/images/logo.png' }}"
                            alt="logo" style="height: 50px;">
                    </a>
                    <nav class="tm-header-nav">
                        <ul>
                            <li><a href="{{ route('index') }}">Anasayfa</a></li>
                            <li><a href="{{ route('kurumsal') }}">Kurumsal</a></li>
                            <li><a href="{{ route('hizmetlerimiz') }}">Hizmetlerimiz</a></li>
                            <li><a href="{{ route('galeri') }}">Galeri</a></li>
                            <li><a href="{{ route('blogIndexScreen') }}">Blog</a></li>
                            <li class="tm-header-nav-dropdown"><a href="#">Eğitimler</a>
                                <ul>
                                    @foreach (App\Models\Education::Where('deleted', 0)->get() as $item)
                                        <li><a href="/education/{{ $item->code }}">{{ $item->title }}</a></li>
                                    @endforeach

                                </ul>
                            </li>
                            <li><a href="{{ route('iletisim') }}">İletişim</a></li>
                        </ul>
                    </nav>
                    <div class="tm-header-button">
                        <button onclick="randevuAlButton()" class="tm-button hash-scroll-link">Randevu
                            Al</button>
                    </div>
                    <div class="tm-mobilenav"></div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    function randevuAlButton() {
        window.open("{{ route('randevuScreen') }}", '_self');
    }
</script>
