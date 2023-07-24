@extends('Admin.layouts.main')
@section('admin_main_body')
    <div class="page-title-box">
        <div class="row align-items-center ">
            <div class="col-md-8">
                <div class="page-title-box">
                    <h4 class="page-title">Slider</h4>
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
                <form action="{{ route('changeSlider') }}" method="POST">
                    @csrf
                    <div class="m-3">
                        <label for="">Slider 1 Başlığı: </label>
                        <input type="text" class="form-control" name="slider_1_title"
                            placeholder="Slider 1 Başlığı Giriniz..." value="{{ $slider_1_title->value ?? '' }}">
                    </div>

                    <div class="m-3">
                        <label for="">Slider 1: </label>
                        <input type="text" class="form-control" name="slider_1" placeholder="Slider 1 Giriniz..."
                            value="{{ $slider_1->value ?? '' }}">
                    </div>

                    <div class="m-3">
                        <label for="">Slider 2 Başlığı: </label>
                        <input type="text" class="form-control" name="slider_2_title"
                            placeholder="Slider 2 Başlığı Giriniz..." value="{{ $slider_2_title->value ?? '' }}">
                    </div>

                    <div class="m-3">
                        <label for="">Slider 2: </label>
                        <input type="text" class="form-control" name="slider_2" placeholder="Slider 2 Giriniz..."
                            value="{{ $slider_2->value ?? '' }}">
                    </div>

                    <div class="m-3">
                        <label for="">Slider 3 Başlığı: </label>
                        <input type="text" class="form-control" name="slider_3_title"
                            placeholder="Slider 3 Başlığı Giriniz..." value="{{ $slider_3_title->value ?? '' }}">
                    </div>

                    <div class="m-3">
                        <label for="">Slider 3: </label>
                        <input type="text" class="form-control" name="slider_3" placeholder="Slider 3 Giriniz..."
                            value="{{ $slider_3->value ?? '' }}">
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
