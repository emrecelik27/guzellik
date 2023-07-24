<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Giriş</li>

                <li>
                    <a href="{{ route('adminScreen') }}" class="waves-effect">
                        <i class="dripicons-meter"></i><span class="badge badge-info badge-pill float-right">9+</span>
                        <span> Anasayfa </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('serviceScreen') }}" class="waves-effect"><i class="dripicons-calendar"></i><span>
                            Hizmetler </span></a>
                </li>

                <li>
                    <a href="{{ route('galeriScreen') }}" class="waves-effect"><i
                            class="mdi mdi-picture-in-picture-bottom-right"></i><span>
                            Galeri </span></a>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-grease-pencil"></i><span>
                            Eğitimler <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                        </span></a>
                    <ul class="submenu">
                        <li><a href="{{ route('educationScreen') }}">Eğitimler</a></li>
                        <li><a href="{{ route('altEducationScreen') }}">Alt Eğitimler</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('blogScreen') }}" class="waves-effect"><i
                            class="mdi mdi-book-open-page-variant"></i><span>
                            Blog </span></a>
                </li>


                <li class="menu-title">Site Verileri</li>

                <li>
                    <a href="{{ route('kurumsalScreen') }}" class="waves-effect"><i
                            class="mdi mdi-account-badge-horizontal"></i><span>
                            Kurumsal </span></a>
                </li>

                <li>
                    <a href="{{ route('faqScreen') }}" class="waves-effect"><i
                            class="mdi mdi-comment-question"></i><span>
                            Sık Sorulan Sorular </span></a>
                </li>

                <li>
                    <a href="{{ route('contactDataScreen') }}" class="waves-effect"><i
                            class="mdi mdi-phone-outline"></i><span>
                            İletişim Verileri </span></a>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-grease-pencil"></i><span>
                            Site Verileri <span class="float-right menu-arrow"><i
                                    class="mdi mdi-chevron-right"></i></span>
                        </span></a>
                    <ul class="submenu">
                        <li><a href="{{ route('logoScreen') }}">Logolar</a></li>
                        <li><a href="{{ route('footerScreen') }}">Footerlar</a></li>
                        <li><a href="{{ route('socialMediaScreen') }}">Sosyal Medya Hesapları</a></li>
                        <li><a href="{{ route('workTimeScreen') }}">Çalışma Saatleri</a></li>
                        <li><a href="{{ route('sliderScreen') }}">Slider İçeriği</a></li>
                        <li><a href="{{ route('videoScreen') }}">Anasayfa Videosu</a></li>
                    </ul>
                </li>

                <li class="menu-title">Yönetim</li>


                <li>
                    <a href="{{ route('contactScreen') }}" class="waves-effect"><i
                            class="mdi mdi-phone-classic"></i><span>
                            İletişimler</span></a>
                </li>

                <li>
                    <a href="{{ route('randevuAdminScreen') }}" class="waves-effect"><i
                            class="dripicons-calendar"></i><span>
                            Randevular</span></a>
                </li>

                <li>
                    <a href="{{ route('userScreen') }}" class="waves-effect"><i
                            class="mdi mdi-account-multiple-outline"></i><span>
                            Kullanıcılar</span></a>
                </li>

            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
