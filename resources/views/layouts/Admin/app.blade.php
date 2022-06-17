<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('assets1/images/favicon1.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets1/images/favicon1.png') }}" type="image/x-icon">
    <title>Appa - Admin Dashboard</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.css" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/fontawesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/icofont.css') }}">
    <!-- Themify icon-->


    <link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/prism.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/vector-map.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('assets1/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/responsive.css') }}">
</head>

<body class="rtl">
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start       -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row m-0">
                <div class="main-header-left">
                    <div class="logo-wrapper"><a href="{{route('home')}}"><img class="img-fluid"
                                src="{{ asset('assets1/images/logo/logo.png') }}" alt=""></a></div>
                    <div class="dark-logo-wrapper"><a href="{{route('/')}}"><img class="img-fluid"
                                src="{{ asset('assets1/images/logo/dark-logo.png') }}" alt=""></a></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center"
                            id="sidebar-toggle"></i></div>
                </div>
                <div class="nav-right col pull-right right-menu p-0">
                    <ul class="nav-menus">
                        <li class="onhover-dropdown p-0">
                            <button class="btn btn-primary-light" type="button"><a href="{{ route('logout') }} "
                                    onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i
                                        data-feather="log-out"></i>تسجيل خروج</a></button>
                            <form id="frm-logout" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>


                        </li>
                    </ul>
                </div>
                <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
        <!-- Page Header End -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper sidebar-icon">
            <!-- Page Sidebar Start-->
            @include('layouts.Admin.sidebar')
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid dashboard-default-sec">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

        <!-- footer start-->
        @include('layouts.Admin.footer')
    </div>
    <!-- latest jquery-->
    <script src="{{ asset('assets1/js/jquery-3.5.1.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('assets1/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets1/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('assets1/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('assets1/js/config.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('assets1/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets1/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('assets1/js/chart/chartist/chartist.js') }}"></script>
    <script src="{{ asset('assets1/js/chart/chartist/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ asset('assets1/js/chart/knob/knob.min.js') }}"></script>
    <script src="{{ asset('assets1/js/chart/knob/knob-chart.js') }}"></script>
    <script src="{{ asset('assets1/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets1/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('assets1/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets1/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets1/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets1/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets1/js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('assets1/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('assets1/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets1/js/vector-map/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets1/js/vector-map/map/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets1/js/vector-map/map/jquery-jvectormap-us-aea-en.js') }}"></script>
    <script src="{{ asset('assets1/js/vector-map/map/jquery-jvectormap-uk-mill-en.js') }}"></script>
    <script src="{{ asset('assets1/js/vector-map/map/jquery-jvectormap-au-mill.js') }}"></script>
    <script src="{{ asset('assets1/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js') }}"></script>
    <script src="{{ asset('assets1/js/vector-map/map/jquery-jvectormap-in-mill.js') }}"></script>
    <script src="{{ asset('assets1/js/vector-map/map/jquery-jvectormap-asia-mill.js') }}"></script>
    <script src="{{ asset('assets1/js/dashboard/default.js') }}"></script>
    <script src="{{ asset('assets1/js/notify/index.js') }}"></script>
    <script src="{{ asset('assets1/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets1/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets1/js/datepicker/date-picker/datepicker.custom.js') }}"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.js"></script>

    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('assets1/js/script.js') }}"></script>
    <script src="{{ asset('assets1/js/theme-customizer/customizer.js') }}"></script>
    <!-- login js-->
    <!-- Plugin used-->
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
            responsive: true
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#datatable2').DataTable();
            responsive: true

$("input[type=radio]").change(function(){
    if( $('.authentic-radio').is(":checked") ){

        $('.corporate-form1').removeClass('d-none');
        $('.corporate-form2').addClass('d-none');
    }
    if( $('.behalf-radio').is(":checked") ){

        $('.corporate-form2').removeClass('d-none');
        $('.corporate-form1').addClass('d-none');
    }
});

$("input[type=radio]").change(function(){
    if( $('.authentic-individual-radio').is(":checked") ){

        $('.individual-form1').removeClass('d-none');
        $('.individual-form2').addClass('d-none');
    }
    if( $('.behalf-individual-radio').is(":checked") ){

        $('.individual-form2').removeClass('d-none');
        $('.individual-form1').addClass('d-none');
    }
});


$('.img-popup').click(function(){
        let src = $(this).attr('src');
        $('.img-modal .modal-body img').attr('src', src);
    });

});
    </script>
</body>

</html>
