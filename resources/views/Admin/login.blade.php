<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/admin/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/admin/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">Giriş Yap</h3>
                            <form action="{{ route('adminLogin') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>E-mail *</label>
                                    <input type="email" class="form-control p_input" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Şifre *</label>
                                    <input type="password" class="form-control p_input" name="password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block enter-btn">Giriş
                                        Yap</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/admin/js/off-canvas.js"></script>
    <script src="../../assets/admin/js/hoverable-collapse.js"></script>
    <script src="../../assets/admin/js/misc.js"></script>
    <script src="../../assets/admin/js/settings.js"></script>
    <script src="../../assets/admin/js/todolist.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: "<h2 style='color:black;'> Hata</h2>",
                html: "<p style='color:black'> {{ session('error') }}</p>",
                confirmButtonText: 'Tamam',
                confirmButtonColor: '#DD6B55',
            })
        @endif
    </script>
    <!-- endinject -->
</body>

</html>
