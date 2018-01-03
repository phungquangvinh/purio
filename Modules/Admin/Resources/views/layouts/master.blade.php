<html>
<head>
    <title>@yield('title')</title>
    <base href="{{asset('')}}">
    <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{url('assets/plugins/datepicker/css/bootstrap-datepicker3.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{url('assets/css/bootstrap-select.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{url('assets/admin/css/main.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{url('assets/admin/css/manager.css')}}"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]> -->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!--[endif]> -->
</head>
<body>
<div id="header">
    <div class="top-header hidden-xs">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2>{{ trans('messages.label.company_name') }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="main">
    @yield('content')
</div>
<footer id="footer" class="@yield('fixbottom')" >
    <div class="copyright">Copyright © Purio Restaurant</div>
</footer>
@section('script')
    <script type="text/javascript" src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/admin/js/main.js')}}"></script>
@show
</body>
</html>