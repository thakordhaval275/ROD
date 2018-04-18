<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">

    <title>Resource On Demand</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/jasny-bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}" type="text/css">
    <!-- Material CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/material-kit.css')}}" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/fonts/themify-icons.css')}}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('assets/extras/animate.css')}}" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('assets/extras/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/extras/owl.theme.css')}}" type="text/css">
    <!-- Rev Slider CSS -->
    <link rel="stylesheet" href="{{asset('assets/extras/settings.css')}}" type="text/css">
    <!-- Slicknav js -->
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" type="text/css">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/colors/red.css')}}" media="screen" />

    <link rel="stylesheet" type="text/css" href="{{asset('assets/sweetalert2/sweetalert2.css')}}" media="screen" />




</head>

<body>

@yield('csslinks')

@include('header')

@yield('contain')

@include('footer')

@yield('jslinks')

<!-- Go To Top Link -->
<a href="#" class="back-to-top">
    <i class="ti-arrow-up"></i>
</a>

<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
            <div class="object" id="object_five"></div>
            <div class="object" id="object_six"></div>
            <div class="object" id="object_seven"></div>
            <div class="object" id="object_eight"></div>
        </div>
    </div>
</div>

<!-- Main JS  -->
<script type="text/javascript" src="{{asset('assets/sweetalert2/sweetalert2.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/material.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/material-kit.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.slicknav.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jasny-bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/form-validator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/contact-form-script.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.themepunch.tools.min.js')}}"></script>

</body>
</html>

<script>
    @if(session()->has('success_message'))
    swal("Congratulations!", "{{session()->get('success_message')}}", "success")
    @endif
</script>
<script>
    @if(session()->has('update_message'))
    swal("Updated!", "{{session()->get('update_message')}}", "success")
    @endif
</script>
<script>
    @if(session()->has('error_message'))
    swal("Ooops!", "{{session()->get('error_message')}}", "error")
    @endif
</script>
<script>
    @if(session()->has('delete_message'))
    swal("Deleted!", "{{session()->get('delete_message')}}", "success")
    @endif
</script>
<script>
    @if(session()->has('accept_message'))
    swal("Accepted!", "{{session()->get('accept_message')}}", "success")
    @endif
</script>
<script>
    @if(session()->has('reject_message'))
    swal("Rejected!", "{{session()->get('reject_message')}}", "error")
    @endif
</script>


