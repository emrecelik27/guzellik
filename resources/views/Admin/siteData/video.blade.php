@extends('Admin.layouts.main')
@section('admin_main_body')
    <div class="page-title-box">
        <div class="row align-items-center ">
            <div class="col-md-8">
                <div class="page-title-box">
                    <h4 class="page-title">Video</h4>
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
                <form action="{{ route('changeVideo') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="m-3">
                        <label for="">videonun Küçük Resmi *: </label>
                        <input type="file" class="form-control" name="mini_picture" required>
                    </div>

                    <div class="m-3">
                        <label for="">Video *: </label>
                        <input type="file" class="form-control" name="video" required>
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
