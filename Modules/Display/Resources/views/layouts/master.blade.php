<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="assets/display/css/reset.css" media="all"/>
    <!-- 全ページ共通css -->
    <link rel="stylesheet" type="text/css" href="assets/display/css/common.css" media="all"/>
    <!-- トップページcss -->
    <link rel="stylesheet" type="text/css" href="assets/display/css/top.css" media="all"/>
    <!-- トップページ以外のcss -->
    <link rel="stylesheet" type="text/css" href="assets/display/css/cate.css" media="all"/>
    <!-- ipadのcss -->
    <link rel="stylesheet" type="text/css" href="assets/display/css/ipad.css" media="all"/>

    <script src="{{asset('assets/display/js/jquery-1.11.3.min.js')}}" type="text/javascript"></script>
    <!-- font-awesomeアイコン -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <script type="text/javascript" src="assets/display/js/smooth-scroll.js"></script>
    <script type="text/javascript" src="assets/display/js/smooth-scroll_gr.js"></script>
    <!--スクロールバー-->
    <link href="{{asset('assets/display/js/mCustomScrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" type="text/css" media="all,screen" />
    <script src="{{asset('assets/display/js/mCustomScrollbar/jquery.mCustomScrollbar.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/display/js/mCustomScrollbar/scroll_gr.js')}}" type="text/javascript"></script>

    <script type="text/javascript" src="assets/display/js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="assets/display/js/ofi.min.js"></script>
    <!-- SPメニュー -->
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>--}}
    {{--<script>--}}
        {{--$(document).ready(function() {--}}
            {{--$(".drawer").drawer();--}}
        {{--});--}}
    {{--</script>--}}
    <!-- hoverアクション -->
    <link rel="stylesheet" type="text/css" href="assets/display/css/hover.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="assets/display/css/animate.css" media="all"/>
    <script type="text/javascript" src="assets/display/js/jquery.inview.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
    <script type="text/javascript" src="assets/display/js/html5shiv.min.js"></script>
    <script type="text/javascript" src="assets/display/js/respond.min.js"></script>
</head>
<body id="sample-page" class="drawer drawer--right" data-rsssl="1">
@yield('content')
@yield("content2")
<footer style="background: url(assets/display/img/footer_line.png) center top no-repeat; background-size: 100% auto; padding-top: 50px">
    <div class="f_wrap">
        <div class="line_at hvr-bounce-in">
            <img class="iv iv-rubberBand" src="assets/display/img/saboten_line.png"
                                                alt="LINE@登録はこちら！" width="194" height="188" style="opacity: 1;"></div>

        <div class="yoyaku_banner_02">
            <a class="hvr-bounce-in" href="https://www.sabotencafe.com/booking/">
                <img class="iv iv-rubberBand"
                     src="assets/display/img/yoyaku_banner_02.png"
                     alt="予約こちら" width="194"
                     height="188" style="opacity: 1;"></a>
        </div>

        <div class="f_logo"><a href="https://www.sabotencafe.com/">
                <img class="alignnone size-full wp-image-149"
                     src="assets/display/img/f_logo.png"
                     alt="さぼてんcafe" width="174" height="101"></a>
        </div>
        <div class="f_address">〒242-0006　神奈川県大和市南林間1-4-4　メゾン南林間7店舗B<br>
            11:00～22:00(L.O.21:30)<br>
            定休日：木曜日
        </div>
        <div class="f_tel"><a href="tel:0462891042"><i class="fa fa-phone fa-fw" aria-hidden="true"></i>046-289-1042</a>
        </div>
        <div class="friend-botan"><a href="https://line.me/R/ti/p/%40zed8448o">
                <img height="36" border="0" alt="友だち追加"
                     src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png"></a><br>
        </div>
        <div class="f_link"><a href="https://www.sabotencafe.com/">トップページ</a>｜<a
                    href="https://www.sabotencafe.com/about/">当店について</a>｜<a href="https://www.sabotencafe.com/lunch/">カフェ・ランチ</a>｜<a
                    href="https://www.sabotencafe.com/dinner/">ディナー・コース</a>｜<a
                    href="https://www.sabotencafe.com/drink/">ドリンク</a>｜<a href="https://www.sabotencafe.com/gallery/">ギャラリー</a>｜<a
                    href="https://www.sabotencafe.com/access/">アクセス</a>｜<a
                    href="https://www.sabotencafe.com/blog/">ブログ</a></div>
        <div class="f_copy">copyright © さぼてんcafé all rights reserved.</div>
    </div>  <!-- /固定ページを出力 -->
    <!-- ページトップボタン -->
    <p id="page-top" style="bottom: 10px;">
        <a href="#wrapper" data-scroll="">PAGE TOP</a>
    </p>
</footer>
</body>
</html>