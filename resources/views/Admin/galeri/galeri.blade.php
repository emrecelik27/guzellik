@extends('Admin.layouts.main')
@section('admin_main_body')
    <div class="page-title-box">
        <div class="row align-items-center ">
            <div class="col-md-8">
                <div class="page-title-box">
                    <h4 class="page-title">Galeri</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Sayfadaki galeride görünen bütün resimlere buradan bakabilirsiniz
                        </li>
                    </ol>
                </div>
            </div>

        </div>
    </div>

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    <a class="btn btn-primary" style="float: right;" href="{{ route('galeriCreateScreen') }}">+ Yeni</a>
            </div>
            </h4>
            <div class="row">
                @foreach ($galeris as $item)
                    <div style="margin: 20px;">
                        <img src="../../../{{ $item->image_url }}" alt="" height="300px">
                        <div>
                            <a href="{{ route('galeriRemove') }}?code={{ $item->code }}" class="btn btn-danger"
                                style="margin-left:45%; margin-top: 5px; margin-bottom:15px">
                                Sil
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
