@extends('Admin.layouts.main')
@section('admin_main_body')
    @extends('Admin.layouts.main')
@section('admin_main_body')
    <div class="page-title-box">
        <div class="row align-items-center ">
            <div class="col-md-8">
                <div class="page-title-box">
                    <h4 class="page-title">Galeri Ekle/Güncelle</h4>
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
                <form action="{{ route('galeriAdd') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="m-3">
                        <label for="">Başlık *: </label>
                        <input type="text" class="form-control" name="title" placeholder="Başlık Giriniz..."
                            value="{{ $kurumsal_title->value ?? '' }}"required>
                    </div>
                    <div class="m-3">
                        <label for="">Açıklama *: </label>
                        <textarea name="description" id="" class="form-control" cols="30" rows="10"
                            placeholder="Açıklama Giriniz" required>{{ $kurumsal->value ?? '' }}</textarea>
                    </div>
                    <div class="m-3">
                        <label for="">Resim: </label>
                        <input type="file" class="form-control" name="image">
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

@endsection
