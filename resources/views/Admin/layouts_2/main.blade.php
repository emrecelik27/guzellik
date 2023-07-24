<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../assets/admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../assets/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../../assets/admin/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../../../assets/admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../../assets/admin/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../assets/admin/vendors/owl-carousel-2/owl.theme.default.min.css">

    <!-- Ag-grid için-->
    <link rel="stylesheet" href="../../../assets/admin/css/ag-grid.css">
    <link rel="stylesheet" href="../../../assets/admin/css/ag-theme-balham.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets/admin/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../../assets/admin/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        @include('Admin.layouts.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            @include('Admin.layouts.navbar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('admin_main_body')
                </div>
                <!-- content-wrapper ends -->
                @include('Admin.layouts.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../../assets/admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../../assets/admin/vendors/chart.js/Chart.min.js"></script>
    <script src="../../../assets/admin/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../../../assets/admin/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../../../assets/admin/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../../../assets/admin/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../../assets/admin/js/off-canvas.js"></script>
    <script src="../../../assets/admin/js/hoverable-collapse.js"></script>
    <script src="../../../assets/admin/js/misc.js"></script>
    <script src="../../../assets/admin/js/settings.js"></script>
    <script src="../../../assets/admin/js/todolist.js"></script>
    <!-- endinject -->

    <!-- Ag grid için-->
    <script src="../../../assets/admin/js/ag-grid-community.min.noStyle.js"></script>
    <script src="../../../assets/admin/js/agGridTextFormatter.js"></script>
    <script src="../../../assets/admin/js/agGridTR.js"></script>

    <!-- Custom js for this page -->
    <script src="../../../assets/admin/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

</html>
