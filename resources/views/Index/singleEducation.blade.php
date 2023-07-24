@extends('index.layouts.main')
@section('index_body')
    <!-- Breadcrumb Area -->
    <div class="tm-breadcrumb-area tm-padding-section bg-grey" data-bgimage="assets/images/breadcrumb-bg.jpg">
        <div class="container">
            <div class="tm-breadcrumb">
                <h2>{{ $edu->title }}</h2>
                <ul>
                    <li><a href="{{ route('index') }}">Anasayfa</a></li>
                    <li><a
                            href="/education/{{ App\Models\Education::where('code', $edu->education_code)->first()->code }}">{{ App\Models\Education::where('code', $edu->education_code)->first()->title }}</a>
                    </li>
                    <li>{{ $edu->title }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!--// Breadcrumb Area -->

    <main class="page-content">

        <!-- Blogs Area -->
        <div class="tm-blogs-area tm-padding-section bg-white">
            <div class="container">
                <div class="row">
                    <!-- Blog Details -->
                    <div class="col-lg-8 col-12">
                        <div class="tm-blog blogitem">
                            <div class="tm-blog-thumb">
                                <img src="../../../{{ $edu->main_image_url }}" alt="blog image">
                            </div>
                            <div class="tm-blog-content">
                                <ul class="tm-blog-meta">
                                    </li>
                                    <li class="tm-blog-meta-date" id="CreatedAt"><i class="ti ti-calendar"></i>
                                    </li>
                                </ul>
                                <h5 class="tm-blog-title">{{ $edu->title }}</h5>
                                <p>{{ $edu->description }}</p>
                            </div>

                        </div>
                    </div>
                    <!--// Blog Details -->
                </div>
            </div>
        </div>
        <!--// Blogs Area -->

    </main>

    <script>
        var dateString = "{{ $edu->created_at }}".split(" ")[0];
        var year = dateString.split("-")[0]
        var month = dateString.split("-")[1]
        var date = dateString.split("-")[2]
        result = date + " " + ayGonder(month) + " " + year;

        document.getElementById("CreatedAt").innerHTML += result;

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
