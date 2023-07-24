@extends('index.layouts.main')
@section('index_body')
    <!-- Breadcrumb Area -->
    <div class="tm-breadcrumb-area tm-padding-section bg-grey" data-bgimage="assets/images/breadcrumb-bg.jpg">
        <div class="container">
            <div class="tm-breadcrumb">
                <h2>Blog</h2>
                <ul>
                    <li><a href="{{ route('index') }}">Anasayfa</a></li>
                    <li>Blog</li>
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

                    <!-- Blogs -->
                    <div class="col-lg-8 col-12">
                        <div class="tm-blog-container mt-50-reverse" id="BlogPostDivId">

                            <!-- Single Blog -->

                            <!--// Single Blog -->

                        </div>

                        <div class="tm-pagination mt-50" id="PaginationDiv">

                        </div>
                    </div>
                    <!--// Blogs -->


                </div>
            </div>
        </div>
        <!--// Blogs Area -->

    </main>

    <?php
    
    $gosterilecekDeger = 10;
    $url = $_SERVER['REQUEST_URI'];
    $page = str_contains($url, 'p=') ? explode('p=', $url)[1] : '1';
    $atla = ($page - 1) * $gosterilecekDeger;
    $maxPage =
        intval(
            App\Models\Blog::Where('deleted', 0)
                ->orderBy('created_at', 'DESC')
                ->count() / $gosterilecekDeger,
        ) + 1;
    
    ?>

    <script>
        if ("{{ $page }}" > "{{ $maxPage }}") {
            alert("404");
        }

        @if (App\Models\Blog::Where('deleted', 0)->orderBy('created_at', 'DESC')->first())

            @foreach (App\Models\Blog::Where('deleted', 0)->orderBy('created_at', 'DESC')->skip($atla)->take($gosterilecekDeger)->get() as $item)
                var blog = `<div class="tm-blog mt-50 tm-scrollanim">
                                <div class="tm-blog-thumb">
                                    <a href="/b/{{ $item->code }}">
                                        <img src="../../../{{ $item->image_url }}" alt="blog image">
                                    </a>
                                </div>
                                <div class="tm-blog-content">
                                    <ul class="tm-blog-meta">
                                        </li>
                                        <li class="tm-blog-meta-date" id="{{ $loop->iteration }}CreatedAt"><i class="ti ti-calendar"></i>
                                        </li>
                                    </ul>
                                    <h6 class="tm-blog-title"><a href="#">{{ $item->title }}</a></h6>
                                    <p id="{{ $loop->iteration }}Description"></p>
                                    <a href="/b/{{ $item->code }}" class="tm-readmore tm-readmore-dark">Daha Fazla</a>
                                </div>
                            </div>`

                document.getElementById("BlogPostDivId").innerHTML += blog

                dateGonder("{{ $item->created_at }}", "{{ $loop->iteration }}CreatedAt");
                desGonder("{{ $item->description }}", "{{ $loop->iteration }}Description");
            @endforeach
        @endif

        var pag = `<ul>`;
        @if ($page == 1)
            pag += `<li><a href="{{ route('blogIndexScreen') }}?p=1"><i class="ti ti-angle-left"></i></a></li>`
        @else
            pag +=
                `<li><a href="{{ route('blogIndexScreen') }}?p={{ $page - 1 }}"><i class="ti ti-angle-left"></i></a></li>`
        @endif

        @for ($i = 1; $i <= $maxPage; $i++)
            @if ($i == $page)
                pag +=
                    `<li class="is-active"><a href="{{ route('blogIndexScreen') }}?p={{ $i }}">{{ $i }}</a></li>`
            @else
                pag += `<li><a href="{{ route('blogIndexScreen') }}?p={{ $i }}">{{ $i }}</a></li>`
            @endif
        @endfor

        @if ($page == $maxPage)
            pag +=
                `<li><a href="{{ route('blogIndexScreen') }}?p={{ $maxPage }}"><i class="ti ti-angle-right"></i></a></li>`
        @else
            pag +=
                `<li><a href="{{ route('blogIndexScreen') }}?p={{ $maxPage - 1 }}"><i class="ti ti-angle-right"></i></a></li>`
        @endif

        pag += `</ul>`

        document.getElementById("PaginationDiv").innerHTML = pag;

        function dateGonder(dateString, sendId) {
            dateString = dateString.split(" ")[0];
            var year = dateString.split("-")[0]
            var month = dateString.split("-")[1]
            var date = dateString.split("-")[2]
            result = date + " " + ayGonder(month) + " " + year;

            document.getElementById(sendId).innerHTML += result;
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

        function desGonder(des, sendId) {
            var des =
                `{{ App\Models\Blog::Where('deleted', 0)->orderBy('created_at', 'DESC')->first()->description }}`
            var des2 = des.substring(0, 50);
            if (des.length > 50) {
                des2 += "...";
            }
            document.getElementById(sendId).innerText += des2;
        }
    </script>
@endsection
