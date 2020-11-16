<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('visitor')}}/img/fav-icon.png" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>الموقع الرسمي - مكتب المحامي عبدالرحمن السبيعي</title>
    <!-- Icon css link -->
    <link href="{{asset('visitor')}}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('visitor')}}/css/flaticon.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('visitor')}}/css/bootstrap.min.css" rel="stylesheet">
    <!-- Rev slider css -->
    <link href="{{asset('visitor')}}/vendors/animate-css/animate.css" rel="stylesheet">
    <link href="{{asset('visitor')}}/vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('visitor')}}/vendors/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="{{asset('visitor')}}/vendors/animate-css/animate.css" rel="stylesheet">
    <!-- Extra plugin css -->
    <link href="{{asset('visitor')}}/vendors/stroke-icon/style.css" rel="stylesheet">
    <link href="{{asset('visitor')}}/css/style.css" rel="stylesheet">
    <link href="{{asset('visitor')}}/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('visitor')}}/fonts/flaticon.css" />
    <link rel="stylesheet" href="{{asset('visitor')}}/css/jquery.fancybox.css" />
    <link href="{{asset('visitor')}}/css/mobilestyle.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('visitor')}}/dist/styles/jquery-simple-mobilemenu-slide.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kufam&display=swap" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .errorMessage{
            height: 45px;
            -webkit-box-shadow: none;
            box-shadow: none;
            padding: 0px 24px;
            outline: none;
            font-size: 17px;
            color: #ff0000;
            letter-spacing: .51px;
            margin-bottom: 0;
        }

        .successMessage{
            text-align: center;
            color: green;
            font-size: 30px;
        }

        .ourservice-panel::before {
            content: '';
            position: absolute;
            top: -15px;
            left: -5px;
            height: 0%;
            right: -5px;
            border: solid 5px #fff;
            transition: height 0.3s cubic-bezier(0.4, 0, 1, 1);
            display: ;
        }
    @yield('style')
    </style>


</head>
<body>
