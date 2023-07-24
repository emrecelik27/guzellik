@extends('Admin.layouts.main')
@section('admin_main_body')
    <div class="page-title-box">
        <div class="row align-items-center ">
            <div class="col-md-8">
                <div class="page-title-box">
                    <h4 class="page-title">SSS Ekle/Güncelle</h4>
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
                <form action="{{ route('createFaq') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div hidden>
                        <input type="text" name="code" value="{{ $faq->code ?? '' }}">
                    </div>
                    <div class="m-3">
                        <label for="">Soru *: </label>
                        <textarea name="question" id="" class="form-control" cols="30" rows="10"
                            placeholder="Açıklama Giriniz(isteğe Bağlı)">{{ $faq->question ?? '' }}</textarea>
                    </div>
                    <div class="m-3">
                        <label for="">Cevap *: </label>
                        <textarea name="answer" id="" class="form-control" cols="30" rows="10"
                            placeholder="Açıklama Giriniz(isteğe Bağlı)">{{ $faq->question ?? '' }}</textarea>
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
