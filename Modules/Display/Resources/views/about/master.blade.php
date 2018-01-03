<!DOCTYPE html>
<html>
<head>	
<meta charset="UTF-8">
<!-- ====================================================================================

	viewport設定（デバイスによって使い分ける）
	
===================================================================================== -->
<script async="" src="https://www.google-analytics.com/analytics.js"></script>
<script type="text/javascript">
	if ((navigator.userAgent.indexOf('iPhone') > 0) || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
		document.write('<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=yes" />');
	}else{
		document.write('<meta name="viewport" content="width=1366, user-scalable=yes," />');
	}
</script><meta name="viewport" content="width=1366, user-scalable=yes,">

	<title>@yield('title')</title>

	<meta name="keywords" content="キーワード1,キーワード2,キーワード3" />
<!-- ====================================================================================

    OGP設定

===================================================================================== -->

 <meta property="og:title" content="" />
 <meta property="og:description" content="" />
 <meta property="og:url" content="" />
 <meta property="og:image" content="" />
 
 <meta property="og:title" content="" />
 <meta property="og:description" content="" />
 <meta property="og:url" content="" />
 <meta property="og:image" content="" />

 <meta property="og:site_name" content="" />
 <meta property="og:type" content="article" />
<!-- ====================================================================================

    リセットcss

===================================================================================== -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/display/css/reset.css')}}" media="all" />
<!-- ====================================================================================

    wordpress必須タグ

===================================================================================== -->
<!-- ====================================================================================

    IE9用必要タグ

===================================================================================== -->

<meta http-equiv="Imagetoolbar" content="no" />
<script type="text/javascript" src="{{asset('assets/display/js/html5shiv.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/display/js/respond.min.js')}}"></script>
<!-- ====================================================================================

    grオリジナル外部ファイル

===================================================================================== -->
<!-- 全ページ共通css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/display/css/common.css')}}" media="all" />

<!-- トップページcss -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/display/css/top.css')}}" media="all" />

<!-- トップページ以外のcss -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/display/css/cate.css')}}" media="all" />


<!-- ipadのcss -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/display/css/ipad.css')}}" media="all" />


<!-- font-awesomeアイコン -->
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

<!-- データスクロール -->
<script type="text/javascript" src="{{asset('assets/display/js/smooth-scroll.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/display/js/smooth-scroll_gr.js')}}"></script>
<!--スクロールバー-->
<link href="{{asset('assets/display/js/mCustomScrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" type="text/css" media="all,screen" />
<script type="text/javascript" src="{{asset('assets/display/js/mCustomScrollbar/jquery.mCustomScrollbar.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/display/js/mCustomScrollbar/scroll_gr.js')}}"></script>


<!-- IE対応 画像トリミング -->
<script type="text/javascript" src="{{asset('assets/display/js/ofi.min.js')}}"></script>

<!-- SPメニュー -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
  $(".drawer").drawer();
});
</script>

<!-- hoverアクション -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/display/css/hover.css')}}" media="all" />

<!-- googleアナリティクス -->
<!-- ====================================================================================

    スクロールエフェクト

===================================================================================== -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/display/css/animate.css')}}" media="all" />
<script type="text/javascript" src="{{asset('assets/display/js/jquery.inview.js')}}"></script>
<script type="text/javascript">

    $(function(){
        var t;
        var ani;
        $('.iv').on('inview', function(event, isInView) {
            if (isInView) {
                t = $(this).attr("data-time") ? $(this).attr("data-time") : 0;
                $(this).delay(t).queue(function(){
                    ani = $(this).attr("class").match(/iv\-([A-Za-z]+)/);
                    $(this).addClass('animated '+ani[1]);
                    $(this).css('opacity',1);
                });
            } else {
                ani = $(this).attr("class").match(/iv\-([A-Za-z]+)/);
                $(this).removeClass('animated '+ani[1]);
                $(this).css('opacity',0);
                $(this).dequeue();
            }
        });
    });  
      
</script>
</head>
<body data-rsssl="1" id="about" class="drawer drawer--right">
	@yield('content')
</body>
</html>