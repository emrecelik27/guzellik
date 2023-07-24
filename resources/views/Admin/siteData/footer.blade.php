@extends('Admin.layouts.main')
@section('admin_main_body')
    <div class="page-title-box">
        <div class="row align-items-center ">
            <div class="col-md-8">
                <div class="page-title-box">
                    <h4 class="page-title">Footer</h4>
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
                <form action="{{ route('changeFooter') }}" method="POST">
                    @csrf
                    <div class="m-3">
                        <label for="">Admin Sayfası Footer *: </label>
                        <input type="text" class="form-control" name="admin_footer" placeholder="Footer Giriniz..."
                            value="{{ $admin_footer->value ?? '© 2019 Zegva - Crafted with by Themesdesign.' }}"required>
                    </div>

                    <div class="m-3">
                        <label for="">Arayüz Footer *: </label>
                        <input type="text" class="form-control" name="index_footer" placeholder="Footer Giriniz..."
                            value="{{ $index_footer->value ?? 'Powered By ThemeMarch © 2019' }}"required>
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
