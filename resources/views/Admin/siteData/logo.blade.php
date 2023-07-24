@extends('Admin.layouts.main')
@section('admin_main_body')
    <div class="page-title-box">
        <div class="row align-items-center ">
            <div class="col-md-8">
                <div class="page-title-box">
                    <h4 class="page-title">Logo</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">
                        </li>
                    </ol>
                </div>
            </div>

        </div>
    </div>

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="col-lg-12">
                <form action="{{ route('changeLogo') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="m-3 col-lg-5">
                        <label for="">Admin sayfası Ana logo *: </label>
                        <div class="mb-3 mt-3">
                            <p>Daha önce yüklenmiş logo: </p>
                            <img src="../../../{{ $admin_main_logo->value ?? 'assets/admin_2/images/logo-light.png' }}"
                                alt="admin_main_logo" style="height: 50px; background-color: black;">
                        </div>
                        <input type="file" class="form-control" name="admin_main_logo" id="admin_main_logo">
                    </div>

                    <div class="m-3 col-lg-5">
                        <label for="">Admin sayfası Mini logo *: </label>
                        <div class="mb-3 mt-3">
                            <p>Daha önce yüklenmiş logo: </p>
                            <img src="../../../{{ $admin_mini_logo->value ?? 'assets/admin_2/images/logo-sm.png' }}"
                                alt="admin_mini_logo" style="height: 50px;">
                        </div>
                        <input type="file" class="form-control" name="admin_mini_logo" id="admin_mini_logo">
                    </div>

                    <div class="m-3 col-lg-5">
                        <label for="">İndex sayfası Ana logo *: </label>
                        <div class="mb-3 mt-3">
                            <p>Daha önce yüklenmiş logo: </p>
                            <img src="../../../{{ $index_main_logo->value ?? 'assets/index/images/logo.png' }}"
                                alt="index_main_logo" style="height: 50px; ">
                        </div>
                        <input type="file" class="form-control" name="index_main_logo" id="index_main_logo">
                    </div>

                    <div class="m-3 col-lg-5">
                        <label for="">Index sayfası footer logo *: </label>
                        <div class="mb-3 mt-3">
                            <p>Daha önce yüklenmiş logo: </p>
                            <img src="../../../{{ $index_footer_logo->value ?? 'assets/index/images/logo.png' }}"
                                alt="index_footer_logo" style="height: 50px;">
                        </div>
                        <input type="file" class="form-control" name="index_footer_logo" id="index_footer_logo">
                    </div>

                    <div class="m-3" style="float: right;">
                        <button type="submit" class="btn btn-success">Kaydet</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script>
        function submitFun() {
            d
        }
    </script>
@endsection
