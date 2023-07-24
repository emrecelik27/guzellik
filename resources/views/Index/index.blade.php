@extends('index.layouts.main')
@section('index_body')
    <!-- Heroslider Area -->
    <div class="tm-heroslider-area">

        <div class="tm-heroslider-slider">

            <!-- Heroslider Item -->
            <div class="tm-heroslider" data-bgimage="../../../assets/index/images/heroslider-image-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-9">
                            <div class="tm-heroslider-contentwrapper">
                                <div class="tm-heroslider-content">
                                    <h1>{{ App\Models\KeyValue::Where('key', 'slider_1_title')->first()->value ?? '' }}</h1>
                                    <p>{{ App\Models\KeyValue::Where('key', 'slider_1')->first()->value ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Heroslider Item -->

            <!-- Heroslider Item -->
            <div class="tm-heroslider" data-bgimage="../../../assets/index/images/heroslider-image-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-9">
                            <div class="tm-heroslider-contentwrapper">
                                <div class="tm-heroslider-content">
                                    <h1>{{ App\Models\KeyValue::Where('key', 'slider_2_title')->first()->value ?? '' }}</h1>
                                    <p>{{ App\Models\KeyValue::Where('key', 'slider_2')->first()->value ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Heroslider Item -->

            <!-- Heroslider Item -->
            <div class="tm-heroslider" data-bgimage="../../../assets/index/images/heroslider-image-3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-9">
                            <div class="tm-heroslider-contentwrapper">
                                <div class="tm-heroslider-content">
                                    <h1>{{ App\Models\KeyValue::Where('key', 'slider_3_title')->first()->value ?? '' }}</h1>
                                    <p>{{ App\Models\KeyValue::Where('key', 'slider_3')->first()->value ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Heroslider Item -->

        </div>

        <ul class="tm-heroslider-social">
            @if (App\Models\KeyValue::Where('key', 'facebook')->first())
                <li><a href="{{ App\Models\KeyValue::Where('key', 'facebook')->first()->value }}"><i
                            class="ti ti-facebook"></i></a>
                    <span class="tm-heroslider-social-tooltip">Facebook</span>
                </li>
            @endif

            @if (App\Models\KeyValue::Where('key', 'twitter')->first())
                <li><a href="{{ App\Models\KeyValue::Where('key', 'twitter')->first()->value }}"><i
                            class="ti ti-twitter-alt"></i></a>
                    <span class="tm-heroslider-social-tooltip">Twitter</span>
                </li>
            @endif

            @if (App\Models\KeyValue::Where('key', 'instagram')->first())
                <li><a href="{{ App\Models\KeyValue::Where('key', 'instagram')->first()->value }}"><i
                            class="ti ti-instagram"></i></a>
                    <span class="tm-heroslider-social-tooltip">Instragram</span>
                </li>
            @endif
        </ul>

    </div>
    <!--// Heroslider Area -->

    <!-- Page Content -->
    <main class="page-content">

        <!-- About Area -->
        <section id="tm-about-area" class="tm-section tm-about-area tm-padding-section bg-white"
            data-bgimage="../../../assets/index/images/about-bg-image.png" data-white-overlay="8">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-9 col-12">
                        <div class="tm-sectiontitle text-center">
                            <h2>Kurumsal</h2>
                            <span class="tm-sectiontitle-divider">
                                <img src="../../../assets/index/images/section-divider-icon.png" alt="section divider">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="tm-about tm-scrollanim" data-bgimage="../../../assets/index/images/about-block-background.png">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8">
                            <h3>{{ App\Models\KeyValue::Where('key', 'kurumsal_title')->first()->value ?? 'Kurumsal' }}</h3>
                            <p> {{ App\Models\KeyValue::Where('key', 'kurumsal')->first()->value ?? 'Cenk Karka' }}</p>

                            <a href="#" class="tm-button">Daha fazla</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--// About Area -->

        <!-- Video Area -->
        <div class="tm-section tm-video-area" data-bgimage="../../../assets/index/images/video-area-background.jpg"
            data-overlay="3">
            <div class="container">
                <div class="tm-video text-center">
                    <a href="https://www.youtube.com/watch?v=mHUOCxVT5ro" class="tm-videobutton" data-fancybox>
                        <i class="flaticon-play-button"></i>
                    </a>
                </div>
            </div>
        </div>
        <!--// Video Area -->

        <!-- Service Area -->
        <div id="tm-service-area" class="tm-section tm-service-area tm-padding-section bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-9 col-12">
                        <div class="tm-sectiontitle text-center">
                            <h2>Hizmetlerimiz</h2>
                            <span class="tm-sectiontitle-divider">
                                <img src="../../../assets/index/images/section-divider-icon.png" alt="section divider">
                            </span>
                            <p></p>
                        </div>
                    </div>
                </div>
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
            </div>
        </div>
        <!--// Service Area -->

        <!-- Appointment Area -->
        <div id="appointment-area" class="tm-section tm-appointment-area tm-padding-section bg-grey"
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
        <!--// Appointment Area -->

        <!-- Portfolio Area -->
        <div class="tm-section tm-portfolio-area tm-padding-section bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-9 col-12">
                        <div class="tm-sectiontitle text-center">
                            <h2>Galeri</h2>
                            <span class="tm-sectiontitle-divider">
                                <img src="../../../assets/index/images/section-divider-icon.png" alt="section divider">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row tm-portfolio-wrapper mt-30-reverse">

                    @foreach (App\Models\Galeri::Where('deleted', '0')->get() as $item)
                        @if ($loop->iteration == 8)
                        @break
                    @endif
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
            <div class="tm-portfolio-loadmore text-center mt-50">
                <a href="{{ route('galeri') }}" class="tm-button">Daha Fazla</a>
            </div>
        </div>

    </div>
    <!--// Portfolio Area -->

    <!-- Faq Area -->
    <div class="tm-section tm-faq-area tm-padding-section bg-grey"
        data-bgimage="../../../assets/index/images/faq-bg-image.jpg" data-white-overlay="9">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-9 col-12">
                    <div class="tm-sectiontitle text-center">
                        <h2>Sık Sorulan Sorular</h2>
                        <span class="tm-sectiontitle-divider">
                            <img src="../../../assets/index/images/section-divider-icon.png" alt="section divider">
                        </span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 col-12">

                    <!-- Accordion -->
                    <div id="tm-accordion-1" class="tm-accordion">
                        @foreach (App\Models\Faq::Where('deleted', '0')->get() as $item)
                            <div class="card">
                                <div class="card-header" id="tm-accordion-1-heading-{{ $loop->iteration }}">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#tm-accordion-1-collapse-{{ $loop->iteration }}"
                                            aria-expanded="true" aria-controls="tm-accordion-1-collapse-1">
                                            {{ $item->question }}
                                        </button>
                                    </h5>
                                </div>

                                <div id="tm-accordion-1-collapse-{{ $loop->iteration }}" class="collapse"
                                    aria-labelledby="tm-accordion-1-heading-1" data-parent="#tm-accordion-1">
                                    <div class="card-body">
                                        <p>{{ $item->answer }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    <!--// Accordion -->

                </div>
            </div>
        </div>
    </div>
    <!--// Faq Area -->

    <!-- Call To Action -->
    <div class="tm-section tm-calltoaction-area bg-grey">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="tm-calltoaction-image tm-scrollanim">
                        <img src="../../../assets/index/images/calltoaction-image.png" alt="calltoaction image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tm-calltoaction-content tm-scrollanim">
                        <h3>Bizimle iletişime geçin</h3>
                        <h4><a
                                href="tel:{{ App\Models\KeyValue::Where('key', 'phone')->where('deleted', 0)->first()->value ?? '' }}"><i
                                    class="ti ti-mobile"></i> Telefon Numarası:
                                {{ App\Models\KeyValue::Where('key', 'phone')->where('deleted', 0)->first()->value ?? '' }}</a>
                        </h4>
                        <h4><span>Ya da</span></h4>
                        <a href="#" class="tm-button hash-scroll-link">Bizimle İletişime Geçin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Call To Action -->

    <!-- Latest Blogs Area -->
    <div id=tm-news-area class="tm-section tm-blog-area tm-padding-section bg-gradient">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-9 col-12">
                    <div class="tm-sectiontitle text-center">
                        <h2>Son Yazılar</h2>
                        <span class="tm-sectiontitle-divider">
                            <img src="../../../assets/index/images/section-divider-icon.png" alt="section divider">
                        </span>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row mt-50-reverse">
                @if (App\Models\Blog::Where('deleted', 0)->orderBy('created_at', 'DESC')->first())
                    <div class="col-lg-6 mt-50">
                        <!-- Single Blog -->

                        <div class="tm-blog tm-scrollanim">
                            <div class="tm-blog-thumb">
                                <a
                                    href="/b/{{ App\Models\Blog::Where('deleted', 0)->orderBy('created_at', 'DESC')->first()->code }}">
                                    <img src="../../../{{ App\Models\Blog::Where('deleted', 0)->orderBy('created_at', 'DESC')->first()->image_url }}"
                                        alt="blog image">
                                </a>
                            </div>
                            <div class="tm-blog-content">
                                <ul class="tm-blog-meta">
                                    <li class="tm-blog-meta-date" id="firstBlogDate">
                                        <i class="ti ti-calendar "></i>
                                    </li>
                                </ul>
                                <h6 class="tm-blog-title"><a
                                        href="/b/{{ App\Models\Blog::Where('deleted', 0)->orderBy('created_at', 'DESC')->first()->code }}"></a>{{ App\Models\Blog::Where('deleted', 0)->orderBy('created_at', 'DESC')->first()->title }}
                                </h6>
                                <p id="firstBlogDes"></p>
                                <a href="/b/{{ App\Models\Blog::Where('deleted', 0)->orderBy('created_at', 'DESC')->first()->code }}"
                                    class="tm-readmore tm-readmore-dark">Daha Fazla</a>
                            </div>
                        </div>

                        <!--// Single Blog -->
                    </div>
                    @if (App\Models\Blog::Where('deleted', 0)->orderBy('created_at', 'DESC')->count() > 1)
                        <div class="col-lg-6 mt-50">

                            @foreach (App\Models\Blog::Where('deleted', 0)->orderBy('created_at', 'DESC')->skip(1)->take(3)->get() as $item)
                                <!-- Single Blog -->
                                <div class="tm-blog tm-blog-2 tm-scrollanim">
                                    <div class="tm-blog-thumb">
                                        <a href="/b/{{ $item->code }}">
                                            <img src="../../../{{ $item->image_url }}" alt="blog image">
                                        </a>
                                    </div>
                                    <div class="tm-blog-content">
                                        <ul class="tm-blog-meta">
                                            <li class="tm-blog-meta-date" id="{{ $loop->iteration }}CreatedAt"><i
                                                    class="ti ti-calendar"></i>
                                            </li>
                                        </ul>
                                        <h6 class="tm-blog-title"><a href="#">{{ $item->title }}</a></h6>
                                        <a href="/b/{{ $item->code }}" class="tm-readmore tm-readmore-dark">Daha
                                            Fazla</a>
                                    </div>
                                </div>
                                <!--// Single Blog -->
                            @endforeach



                        </div>
                    @endif
                @else
                    <div class="text-center">
                        <p>Herhangi bir yazı bulunamadı</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!--// Latest Blogs Area -->

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
                            <form id="tm-contactform" action="{{ route('contactus') }}"
                                class="tm-contact-forminner tm-form" method="POST">
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

</main>
<!--// Page Content -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
    integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
        @if (App\Models\Blog::Where('deleted', 0)->orderBy('created_at', 'DESC')->first())
            dateGonder(
                "{{ App\Models\Blog::Where('deleted', 0)->orderBy('created_at', 'DESC')->first()->created_at }}",
                "firstBlogDate")

            firstDesGonder();
            @if (App\Models\Blog::Where('deleted', 0)->orderBy('created_at', 'DESC')->count() > 1)
                @foreach (App\Models\Blog::Where('deleted', 0)->orderBy('created_at', 'DESC')->skip(1)->take(3)->get() as $item)
                    var sendId = "{{ $loop->iteration }}CreatedAt";
                    var dateString = "{{ $item->created_at }}";
                    dateGonder(dateString, sendId)
                @endforeach
            @endif
        @endif
    });

    function dateGonder(dateString, sendId) {
        dateString = dateString.split(" ")[0];
        var year = dateString.split("-")[0]
        var month = dateString.split("-")[1]
        var date = dateString.split("-")[2]
        result = date + " " + ayGonder(month) + " " + year;

        document.getElementById(sendId).innerHTML += result;
    }

    function firstDesGonder() {
        var des =
            `{{ App\Models\Blog::Where('deleted', 0)->orderBy('created_at', 'DESC')->first()->description }}`
        var des2 = des.substring(0, 50);
        if (des.length > 50) {
            des2 += "...";
        }
        document.getElementById("firstBlogDes").innerText += des2;
    }

    function ayGonder(sayi) {
        if (sayi == 1) return "Ocak";
        else if (sayi == 2) return "Şubat";
        else if (sayi == 3) return "Mart";
        else if (sayi == 4) return "Nisan";
        else if (sayi == 5) return "Mayıs";
        else if (sayi == 6) return "Haziran";
        else if (sayi == 7) return "Temmuz";
        else if (sayi == 8) return "Ağustos";
        else if (sayi == 9) return "Eylül";
        else if (sayi == 10) return "Ekim";
        else if (sayi == 11) return "Kasım";
        else if (sayi == 12) return "Aralık";
    }
</script>
@endsection
