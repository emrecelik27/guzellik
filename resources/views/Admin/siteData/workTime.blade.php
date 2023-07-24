@extends('Admin.layouts.main')
@section('admin_main_body')
    <div class="page-title-box">
        <div class="row align-items-center ">
            <div class="col-md-8">
                <div class="page-title-box">
                    <h4 class="page-title">Kurumsal</h4>
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
                <form action="{{ route('changeWorkTime') }}" method="POST">
                    @csrf
                    <div class="m-3">
                        <label for="">Genel: </label>
                        <input type="text" class="form-control" name="general"
                            placeholder="Genel Çalışma Saati Giriniz..." value="{{ $general->value ?? '' }}">
                    </div>

                    <div class="m-3">
                        <label for="">Pazartesi: </label>
                        <input type="text" class="form-control" name="pazartesi"
                            placeholder="Pazartesi Çalışma Saati Giriniz..." value="{{ $pazartesi->value ?? '' }}">
                    </div>

                    <div class="m-3">
                        <label for="">Salı: </label>
                        <input type="text" class="form-control" name="sali"
                            placeholder="Salı Çalışma Saati Giriniz..." value="{{ $sali->value ?? '' }}">
                    </div>

                    <div class="m-3">
                        <label for="">Çarşamba: </label>
                        <input type="text" class="form-control" name="carsamba"
                            placeholder="Çarşamba Çalışma Saati Giriniz..." value="{{ $carsamba->value ?? '' }}">
                    </div>

                    <div class="m-3">
                        <label for="">Perşembe: </label>
                        <input type="text" class="form-control" name="persembe"
                            placeholder=" Perşembe Çalışma Saati Giriniz..." value="{{ $persembe->value ?? '' }}">
                    </div>

                    <div class="m-3">
                        <label for="">Cuma: </label>
                        <input type="text" class="form-control" name="cuma"
                            placeholder="Cuma Çalışma Saati Giriniz..." value="{{ $cuma->value ?? '' }}">
                    </div>

                    <div class="m-3">
                        <label for="">Cumartesi: </label>
                        <input type="text" class="form-control" name="cumartesi"
                            placeholder="Cumartesi Çalışma Saati Giriniz..." value="{{ $cumartesi->value ?? '' }}">
                    </div>

                    <div class="m-3">
                        <label for="">Pazar: </label>
                        <input type="text" class="form-control" name="pazar"
                            placeholder="Pazar Çalışma Saati Giriniz..." value="{{ $pazar->value ?? '' }}">
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
