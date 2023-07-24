<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>PHİBROWS CENK KARKA</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="../../../assets/index/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="../../../assets/index/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="../../../assets/index/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="../../../assets/index/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="../../../assets/index/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans:400,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="../../../assets/index/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../assets/index/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    @include('Index.layouts.header')
    @yield("index_body")

    @include('index.layouts.footer')
    <!-- Javascript files-->
    <script src="../../../assets/index/js/jquery.min.js"></script>
    <script src="../../../assets/index/js/popper.min.js"></script>
    <script src="../../../assets/index/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/index/js/jquery-3.0.0.min.js"></script>
    <script src="../../../assets/index/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="../../../assets/index/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../../../assets/index/js/custom.js"></script>
    <!-- javascript -->
    <script src="../../../assets/index/js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</body>

</html>
