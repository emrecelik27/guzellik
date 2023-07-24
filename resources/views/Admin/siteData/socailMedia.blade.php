@extends('Admin.layouts.main')
@section('admin_main_body')
    <div class="page-title-box">
        <div class="row align-items-center ">
            <div class="col-md-8">
                <div class="page-title-box">
                    <h4 class="page-title">Sosyal Medya</h4>
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
                <form action="{{ route('changeSocialMedia') }}" method="POST">
                    @csrf
                    <div class="m-3">
                        <label for="">Facebook: </label>
                        <input type="text" class="form-control" name="facebook" placeholder="Facebook Linki Giriniz..."
                            value="{{ $facebook->value ?? '' }}">
                    </div>

                    <div class="m-3">
                        <label for="">Twitter: </label>
                        <input type="text" class="form-control" name="twitter" placeholder="Twitter Linki Giriniz..."
                            value="{{ $twitter->value ?? '' }}">
                    </div>

                    <div class="m-3">
                        <label for="">İnstagram: </label>
                        <input type="text" class="form-control" name="instagram" placeholder="Instagram Linki Giriniz..."
                            value="{{ $instagram->value ?? '' }}">
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
