<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Cenk Karka | Beauty</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="../../../assets/admin_2/images/favicon.ico">

    <link href="../../../assets/admin_2/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="../../../assets/admin_2/plugins/morris/morris.css">

    <link href="../../../assets/admin_2/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../../../assets/admin_2/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="../../../assets/admin_2/css/icons.css" rel="stylesheet" type="text/css">
    <link href="../../../assets/admin_2/css/style.css" rel="stylesheet" type="text/css">


    <!-- Ag-grid için-->
    <link rel="stylesheet" href="../../../assets/admin/css/ag-grid.css">
    <link rel="stylesheet" href="../../../assets/admin/css/ag-theme-balham.css">

    <!-- Ag grid için-->
    <script src="../../../assets/admin/js/ag-grid-community.min.noStyle.js"></script>
    <script src="../../../assets/admin/js/agGridTextFormatter.js"></script>
    <script src="../../../assets/admin/js/agGridTR.js"></script>

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        @include('Admin.layouts.navbar')

        @include('Admin.layouts.sidebar')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">
                    @yield('admin_main_body')
                </div>
                <!-- container-fluid -->

            </div>
            <!-- content -->

            @include('Admin.layouts.footer')

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="../../../assets/admin_2/js/jquery.min.js"></script>
    <script src="../../../assets/admin_2/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/admin_2/js/metismenu.min.js"></script>
    <script src="../../../assets/admin_2/js/jquery.slimscroll.js"></script>
    <script src="../../../assets/admin_2/js/waves.min.js"></script>

    <script src="../../../assets/admin_2/plugins/apexchart/apexcharts.min.js"></script>
    <script src="../../../assets/admin_2/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!--Morris Chart-->
    <script src="../../../assets/admin_2/plugins/morris/morris.min.js"></script>
    <script src="../../../assets/admin_2/plugins/raphael/raphael.min.js"></script>

    <script src="../../../assets/admin_2/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="../../../assets/admin_2/js/app.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if (session('error'))
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 3000
            })
        @endif

        @if (session('success'))
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 3000
            })
        @endif
    </script>

</body>

</html>
