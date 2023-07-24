@extends('Admin.layouts.main')
@section('admin_main_body')
    <div class="page-title-box">
        <div class="row align-items-center ">
            <div class="col-md-8">
                <div class="page-title-box">
                    <h4 class="page-title">Eğitim Ekle/Güncelle</h4>
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
                <form action="{{ route('createAltEducation') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div hidden>
                        <input type="text" name="code" value="{{ $altEducation->code ?? '' }}">
                    </div>
                    <div class="m-3">
                        <label for="">Üst Eğitim *: </label>
                        <select name="education_code" id="education_code" class="form-control">
                            <option value="-1" disabled hidden>Eğitim Seçiniz</option>
                            @foreach ($education as $item)
                                <option value="{{ $item->code }}">{{ $item->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="m-3">
                        <label for="">Başlık *: </label>
                        <input type="text" class="form-control" name="title" placeholder="Başlık Giriniz..."
                            value="{{ $altEducation->title ?? '' }}" required>
                    </div>
                    <div class="m-3">
                        <label for="">Mini Açıklama *: </label>
                        <input type="text" class="form-control" name="mini_description"
                            value="{{ $altEducation->mini_description ?? '' }}" placeholder="Başlık Giriniz...">
                    </div>
                    <div class="m-3">
                        <label for="">Açıklama: </label>
                        <textarea name="description" id="" class="form-control" cols="30" rows="10"
                            placeholder="Açıklama Giriniz(isteğe Bağlı)">{{ $altEducation->description ?? '' }}</textarea>
                    </div>
                    @if (!empty($altEducation->main_image_url))
                        <div class="m-3">
                            <img src="../../../{{ $altEducation->main_image_url }}" alt="asasaas" style="height: 300px"
                                id="imageName">
                        </div>
                    @endif

                    <div class="m-3">
                        <label for="">Ana Resim: </label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <div class="m-3">
                        <label for="">Resim/Video Ekleme (İstediğiniz Kadar): </label>
                        <input type="file" class="form-control" name="files[]" multiple>
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
