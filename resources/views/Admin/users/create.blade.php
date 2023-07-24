@extends('Admin.layouts.main')
@section('admin_main_body')
    <div class="page-title-box">
        <div class="row align-items-center ">
            <div class="col-md-8">
                <div class="page-title-box">
                    <h4 class="page-title">Kullanıcı Ekle/Güncelle</h4>
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
                <form action="{{ route('createUser') }}" method="POST">
                    @csrf
                    <div hidden>
                        <input type="text" name="code" value="{{ $user->code ?? '' }}">
                    </div>
                    <div class="m-3">
                        <label for="">İsim *: </label>
                        <input type="text" class="form-control" name="name" placeholder="İsim Giriniz..."
                            value="{{ $user->name ?? '' }}" required>
                    </div>
                    <div class="m-3">
                        <label for="">E-mail *: </label>
                        <input type="text" class="form-control" name="email" value="{{ $user->email ?? '' }}"
                            placeholder="E-mail Giriniz...">
                    </div>
                    @if (empty($user))
                        <div class="m-3">
                            <label for="">Şifre *: </label>
                            <input type="password" class="form-control" name="password" placeholder="Şifre Giriniz...">
                        </div>
                        <div class="custom-control custom-checkbox m-3">
                            <input type="checkbox" class="custom-control-input" name="active" id="active"
                                data-parsley-multiple="groups" data-parsley-mincheck="2" checked>
                            <label class="custom-control-label" for="active">Aktif
                            </label>
                        </div>
                    @else
                        @if ($user->active == 1)
                            <div class="custom-control custom-checkbox m-3">
                                <input type="checkbox" class="custom-control-input" name="active" id="active"
                                    data-parsley-multiple="groups" data-parsley-mincheck="2" checked>
                                <label class="custom-control-label" for="active">Aktif
                                </label>
                            </div>
                        @else
                            <div class="custom-control custom-checkbox m-3">
                                <input type="checkbox" class="custom-control-input" name="active" id="active"
                                    data-parsley-multiple="groups" data-parsley-mincheck="2">
                                <label class="custom-control-label" for="active">Aktif
                                </label>
                            </div>
                        @endif
                    @endif



                    <div class="m-3" style="float: right;">
                        <button type="submit" class="btn btn-success">Kaydet</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <script>
    </script>
@endsection
