@extends('display::layouts.master')
@section('title')
    Display
@stop
@section('content')
<div id="wrapper">
<header>    
    <!-- ====  PC用ナビ  ======================================================== -->
    <div class="pc_nav_wrap">
        <div class="pc_nav" id="mypc_nav">
            <ul class="clearfix">
                <li><a href="index.php"><img src="assets/display/img/gnavi_logo.png" alt="ホーム"></a></li>
                <li>神奈川県大和市南林間1-4-4<br>メゾン南林間7店舗B<br>11:00～22:00(L.O.21:30)<br>定休日：木曜日</li>
                <li><a href="index.php"><img src="assets/display/img/gnavi_01.png" alt="ホーム"></a></li>
                <li><a href="about/"><img src="assets/display/img/gnavi_02.png" alt="当店について"></a></li>
                <li><a href="lunch/"><img src="assets/display/img/gnavi_03.png" alt="カフェ・ランチ"></a></li>
                <li><a href="dinner/"><img src="assets/display/img/gnavi_04.png" alt="ディナー・コース"></a></li>
                <li><a href="drink/"><img src="assets/display/img/gnavi_05.png" alt="ドリンク"></a></li>
                <li><a href="gallery/"><img src="assets/display/img/gnavi_06.png" alt="ギャラリー"></a></li>
                <li><a href="access/"><img src="assets/display/img/gnavi_07.png" alt="アクセス"></a></li>
                <li><a href="blog/"><img src="assets/display/img/gnavi_08.png" alt="ブログ"></a></li>
                <li><a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a></li>
            </ul>
        </div>
    </div>    
    <script type="text/javascript">
        function myFunction() {
            var x = document.getElementById("mypc_nav");
            if (x.className === "pc_nav") {
                x.className += " responsive";
            } else {
                x.className = "pc_nav";
            }
        }
    </script>
    <!-- ====  ISの上の画像  ======================================================== -->
    
    <div class="dish">
        <a href="#" target="self"><img src="assets/display/img/top_img_14.png" alt="null" /></a>
    </div>
    <!-- ====  予約ボタン  ======================================================== -->
    <div class="yoyaku_banner_01">
    <a href="booking/" class="hvr-wobble-bottom"><img src="assets/display/img/yoyaku_banner_01.png" alt="予約はこちら" /></a>
    </div>

    <!-- ====  H1  ======================================================== -->
    <div class="header-h1">
        <h1>大和市南林間のカフェ&ダイニングバー、さぼてんcafé</h1>       
        
    </div>
    <!-- ====  メイン画像  ======================================================== -->
        <div class="sp_logo">
            <img src="assets/display/img/sp_logo.png" alt="さぼてんcafé">
        </div>
        
        <div class="main_top">
            <div class="catch_copy"></div>
        </div>

    <div class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="assets/display/img/is_01.png" alt="" style="width:100%;">
          </div>

          <div class="item">
            <img src="assets/display/img/is_02.png" alt="" style="width:100%;">
          </div>

          <div class="item">
            <img src="assets/display/img/is_03.png" alt="" style="width:100%;">
          </div>

          <div class="item">
            <img src="assets/display/img/is_04.png" alt="" style="width:100%;">
          </div>
          <div class="item">
            <img src="assets/display/img/is_05.png" alt="" style="width:100%;">
          </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"
        style="background-image: none;">
          <span class="glyphicon glyphicon-chevron-left" 
          style="background-image: url(assets/display/img/bg_direction_nav.png);"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"
        style="background-image: none; right: -80px;">
          <span class="glyphicon glyphicon-chevron-right"
          style="background: url(assets/display/img/bg_direction_nav.png) right;"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- ====  パン屑リスト  ======================================================== -->


</header>

<main class="outer_wrap">

    <div id="pg-2-1" class="panel-grid panel-has-style">
        <div class="siteorigin-panels-stretch panel-row-style panel-row-style-for-2-1" id="row_02" data-stretch-type="full">
            <div id="pgc-2-1-0" class="panel-grid-cell">
                <div id="panel-2-1-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="2"><div class="item_03 panel-widget-style panel-widget-style-for-2-1-0-0">
                    <div class="so-widget-sow-editor so-widget-sow-editor-base">
        <div class="siteorigin-widget-tinymce textwidget">
            <h2><a href="#">⇒「さぼてんcafé」について</a></h2>
        <p><a class="hvr-wobble-vertical" href="#">
                <img class="iv iv-bounce animated bounce" src="assets/display/img/top_img_02.png" alt="さぼてんs" style="opacity: 1;"></a></p>
        </div>
        </div></div></div></div></div></div>


    <div class="pg-2-2-3">
        <div id="pg-2-2" class="panel-grid panel-has-style">
            <div id="row_03" class="panel-row-style panel-row-style-for-2-2">
                <div id="pgc-2-2-0" class="panel-grid-cell">
                    <div id="panel-2-2-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child"
                         data-index="3">
                        <div class="item_04 panel-widget-style panel-widget-style-for-2-2-0-0" style="float: left;">
                            <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                <div class="siteorigin-widget-tinymce textwidget">
                                    <p><img class="iv iv-fadeIn animated fadeIn" src="assets/display/img/top_img_03.png"
                                            alt="Cafe Time" style="opacity: 1;"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="pgc-2-2-1" class="panel-grid-cell"><div id="panel-2-2-1-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="4"><div class="item_05 panel-widget-style panel-widget-style-for-2-2-1-0"><div class="so-widget-sow-editor so-widget-sow-editor-base">
        <div class="siteorigin-widget-tinymce textwidget" style="padding: 75px 0 0 0;">
            <div class="time iv iv-fadeIn" style="opacity: 1;">11:00～15:00</div>
        <div class="huki">
            <img src="assets/display/img/lunch_huki.png" alt="ほっこりカフェランチ">
        </div>
        <div class="name iv iv-fadeIn animated fadeIn" style="opacity: 1;"><img src="assets/display/img/top_img_05.png" alt="Cafe Time"></div>
        <div class="text iv iv-fadeIn animated fadeIn" style="opacity: 1;">お昼は<strong>カフェ・ランチ</strong>タイム！<br>
        さぼてん入りタコライスや週替りのパスタランチや手捏ねハンバーグなど、<br class="br-sp">ランチ限定のお得なメニューを500円からご用意しています！<br>
        自家製ガトーショコラやカタラーナなど、<br class="br-sp">当店自慢のメキシコ産オーガニックコーヒーに合うスイーツもありますので、<br class="br-sp">ちょっと一息つきたい時にも、是非ご利用ください♪</div>
        <div class="banner iv iv-fadeIn animated fadeIn" style="opacity: 1;"><a class="hvr-float" href="lunch/"><img src="assets/display/img/top_img_04.png" alt="カフェ・ランチ"></a></div>
        </div>
        </div></div></div></div></div></div>


        <div id="pg-2-3" class="panel-grid panel-has-style">
            <div id="row_04" class="panel-row-style panel-row-style-for-2-3">
                <div id="pgc-2-3-0" class="panel-grid-cell">
                    <div id="panel-2-3-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="5">
                        <div class="item_06 panel-widget-style panel-widget-style-for-2-3-0-0">
                            <div class="so-widget-sow-editor so-widget-sow-editor-base">

        <div class="siteorigin-widget-tinymce textwidget"">
            <div class="time iv iv-fadeIn animated fadeIn" style="opacity: 1;">17:00～22:00</div>
        <div class="huki"><img src="assets/display/img/dinner_huki.png" alt="わいわいパーティーディナー"></div>
        <div class="name iv iv-fadeIn animated fadeIn" style="opacity: 1;"><img src="assets/display/img/top_img_07.png" alt="Bar Time"></div>
        <div class="text iv iv-fadeIn animated fadeIn" style="opacity: 1;">夜はダイニングバーに変身♪<br>
         <strong>パーティー</strong>メニューは、6品（デザート含む）<span style="font-size: 200%;">1,500</span><span style="font-size: 150%;">円</span>から！</div>
        <div class="text iv iv-fadeIn" style="opacity: 1;">女子会、ママ会、歓送迎会などにご利用ください。<br>
         8名様から貸切も承りますので、お気軽にどうぞ！<br>
         他にも、スポーツジムの帰りに栄養価の高いサボテンメニューで<br class="br-sp">お腹を満たすのもオススメです。</div>
        <div class="banner iv iv-fadeIn">
            <a class="hvr-float" href="dinner/">
                <img src="assets/display/img/top_img_08.png" alt="ディナーコース">
            </a>
        </div>
        </div>
        </div></div></div></div>

        <div id="pgc-2-3-1" class="panel-grid-cell"><div id="panel-2-3-1-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="6"><div class="item_07 panel-widget-style panel-widget-style-for-2-3-1-0"><div class="so-widget-sow-editor so-widget-sow-editor-base">
        <div class="siteorigin-widget-tinymce textwidget">
            <p><img class="iv iv-fadeIn animated fadeIn" src="assets/display/img/top_img_06.png" alt="Bar Time" style="opacity: 1;"></p>
        </div>
        </div></div></div></div></div></div>
    </div>

     <div class="pg-2-4-5">           
        <div id="pg-2-4" class="panel-grid panel-has-style">
            <div id="row_05" class="panel-row-style panel-row-style-for-2-4" style="display: flex;">
                <div id="pgc-2-4-0" class="panel-grid-cell"><div id="panel-2-4-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="7"><div class="item_08 panel-widget-style panel-widget-style-for-2-4-0-0"><div class="so-widget-sow-editor so-widget-sow-editor-base">
        <div class="siteorigin-widget-tinymce textwidget">
            <p>
            	<a href="drink/">
            		<img class="iv iv-swing animated swing" src="assets/display/img/cate_banner_02.png" alt="ドリンク" style="opacity: 1;"></a></p>
        </div>
        </div></div></div></div><div id="pgc-2-4-1" class="panel-grid-cell"><div id="panel-2-4-1-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="8"><div class="item_09 panel-widget-style panel-widget-style-for-2-4-1-0"><div class="so-widget-sow-editor so-widget-sow-editor-base">
        <div class="siteorigin-widget-tinymce textwidget">
            <p><a href="gallery/"><img class="iv iv-swing animated swing" data-time="200" src="assets/display/img/top_img_10.png" alt="ギャラリー" style="opacity: 1;"></a></p>
        </div>
        </div></div></div></div><div id="pgc-2-4-2" class="panel-grid-cell"><div id="panel-2-4-2-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="9"><div class="item_10 panel-widget-style panel-widget-style-for-2-4-2-0"><div class="so-widget-sow-editor so-widget-sow-editor-base">
        <div class="siteorigin-widget-tinymce textwidget">
            <p><a href="access/"><img class="iv iv-swing animated swing" data-time="300" src="assets/display/img/top_img_11.png" alt="アクセス" style="opacity: 1;"></a></p>
        </div>
        </div></div></div></div></div></div>
     
@endsection
@section("content2")
<link href="assets/display/js/mCustomScrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css"
      media="all,screen"/>
<script type="text/javascript" src="assets/display/js/mCustomScrollbar/jquery.mCustomScrollbar.js"></script>
<div id="pg-2-5" class="panel-grid panel-has-style">
    <div id="row_06" class="panel-row-style panel-row-style-for-2-5">
        <div id="pgc-2-5-0" class="panel-grid-cell">
            <div id="panel-2-5-0-0" class="so-panel widget widget_execphp panel-first-child panel-last-child"
                 data-index="10">
                <div class="top_news_box panel-widget-style panel-widget-style-for-2-5-0-0 mCustomScrollbar _mCS_1">
                    <div id="mCSB_1" class="mCustomScrollBox mCS-dark-2 mCSB_vertical mCSB_inside" tabindex="0">                        
                        <div class="execphpwidget">
                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-12-23">2017年12月23日(土)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e3%81%8a%e4%b8%80%e4%ba%ba%e6%a7%98%e3%81%a7%e3%82%82%e5%85%a5%e3%82%8a%e3%82%84%e3%81%99%e3%81%84%e3%81%8a%e5%ba%97%e3%81%a7%e3%81%99%e3%80%82/">お一人様でも入りやすいお店です。</a>
                                </h3>
                                <div class="entry-content">
                                    <p>当店「さぼてんcafe」は小さなお店になります。</p>
                                    <p>カウンター席もあり、お一人様でのご利用も多いです(^-^)</p>
                                    <p>昨日も男性の方でちょい飲みセットご利用のお一人様がいらっしゃって下さいました。</p>
                                    <p>グループでワイワイも楽しいですが、一人で気軽にお酒やお食事を楽しむのもアリかと思います（＾ω＾）</p>
                                    <p>当店ではちょい飲みセットやお食事メインの夜カフェセット等のご用意もありますので、どうぞお一人様でもお気軽にいらして下さい。<a
                                                href="wordpress/wp-content/uploads/2017/12/CEE3EAB7-FCF8-4D6F-92F6-507745873CE5.jpeg"
                                                class="fbx-link fbx-instance"><img
                                                    class="alignnone size-full wp-image-1858"
                                                    src="wordpress/wp-content/uploads/2017/12/CEE3EAB7-FCF8-4D6F-92F6-507745873CE5.jpeg"
                                                    alt="" width="150" height="113"></a></p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-12-20">2017年12月20日(水)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e5%b9%b4%e6%9c%ab%e5%b9%b4%e5%a7%8b%e3%81%ae%e4%bc%91%e6%a5%ad%e3%81%ae%e3%81%8a%e7%9f%a5%e3%82%89%e3%81%9b/">年末年始の休業のお知らせ</a>
                                </h3>
                                <div class="entry-content">
                                    <p>今年も残すところあとわずかとなりましたね。</p>
                                    <p>「さぼてんcafe」は年内は30日(土)迄の営業となります。</p>
                                    <p>年始は5日(金)から通常営業とさせて頂きます。</p>
                                    <p>12/31~1/4は休業となりますので、ご迷惑をおかけしますが宜しくお願い致しますm(_ _)m</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-12-18">2017年12月18日(月)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e4%bb%8a%e9%80%b1%e3%81%ae%e3%82%b9%e3%83%91%e3%82%a4%e3%82%b9%e3%82%ab%e3%83%ac%e3%83%bc/">今週のスパイスカレー</a>
                                </h3>
                                <div class="entry-content">
                                    <p>本日より週替わりスパイスカレーが変更となっております。</p>
                                    <p>&nbsp;</p>
                                    <p>「ハーブソーセージとミックスビーンズのスパイスカレー」</p>
                                    <p>&nbsp;</p>
                                    <p>沢山のミックスビーンズを煮込んだ豆カレーです。</p>
                                    <p>後乗せのハーブソーセージも食べ応え満点です！</p>
                                    <p>少し辛味の強い大人向けカレーですが、是非ともお試しくださいませ(^-^)</p>
                                    <p>ソフトドリンク付きで780円です！<a
                                                href="wordpress/wp-content/uploads/2017/12/2889F4F0-3701-49E3-8EDA-44A571DC2018.jpeg"
                                                class="fbx-link fbx-instance"><img
                                                    class="alignnone size-thumbnail wp-image-1850"
                                                    src="wordpress/wp-content/uploads/2017/12/2889F4F0-3701-49E3-8EDA-44A571DC2018-300x225.jpeg"
                                                    alt="" width="300" height="225"
                                                    srcset="wordpress/wp-content/uploads/2017/12/2889F4F0-3701-49E3-8EDA-44A571DC2018-300x225.jpeg 300w, wordpress/wp-content/uploads/2017/12/2889F4F0-3701-49E3-8EDA-44A571DC2018-768x576.jpeg 768w, wordpress/wp-content/uploads/2017/12/2889F4F0-3701-49E3-8EDA-44A571DC2018-1000x750.jpeg 1000w"
                                                    sizes="(max-width: 300px) 100vw, 300px"></a></p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-12-16">2017年12月16日(土)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e4%bb%8a%e5%b9%b4%e3%82%82%e3%81%82%e3%81%a816%e6%97%a5%ef%bc%81/">今年もあと16日！</a>
                                </h3>
                                <div class="entry-content">
                                    <p>なんですね！改めて数えてビックリしました(笑)</p>
                                    <p>皆さんは忘年会のご予定はありますか？おかげさまで、当店でも本日は3件のご予約を頂いております。</p>
                                    <p>まだ少し空いている日にちもございますので、お気軽にお問い合わせ下さい(*´꒳`*)</p>
                                    <p>それでは、今日も寒いですが、さぼてんcafe元気に営業中です(^-^)/</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-12-15">2017年12月15日(金)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e5%bf%98%e5%b9%b4%e4%bc%9a%e3%83%94%e3%83%bc%e3%82%af/">忘年会ピーク</a>
                                </h3>
                                <div class="entry-content">
                                    <p>忘年会のピークが近づいてますね。</p>
                                    <p>一般的には今週末、若しくは来週末辺りでしょうか。</p>
                                    <p>当店も今週末は沢山のご予約を頂き、もうあまりお席の空きがありません。</p>
                                    <p>本当に有り難い事です。</p>
                                    <p>ですが、、、</p>
                                    <p>来週はまだ少し空いてます！！</p>
                                    <p>忘年会予定のある方、是非「さぼてんcafe」のご利用をお願い致します^_^</p>
                                    <p>&nbsp;</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-12-13">2017年12月13日(水)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e5%af%92%e3%81%84%e3%81%a7%e3%81%99%e3%81%ad_%cf%86%ef%bd%a5_%ef%bd%a5/">寒いですね_φ(･_･</a>
                                </h3>
                                <div class="entry-content">
                                    <p>寒いです、、、</p>
                                    <p>&nbsp;</p>
                                    <p>どうやら寒波が到来しているみたいですね(*´Д｀*)</p>
                                    <p>&nbsp;</p>
                                    <p>皆さん、体調を崩されないよう気をつけて下さい。</p>
                                    <p>「さぼてんcafe」では鉄板を使った熱々メニューもご用意しています。</p>
                                    <p>会社帰りや忘年会等の宴会にもいかがでしょうか？</p>
                                    <p>飲めない方にもオーガニックホットコーヒーご用意致します（＾ω＾）</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-12-11">2017年12月11日(月)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e5%ae%b4%e4%bc%9a%e9%a3%b2%e3%81%bf%e6%94%be%e9%a1%8c/">宴会飲み放題</a>
                                </h3>
                                <div class="entry-content">
                                    <p>大変有り難い事に少しずつ忘年会予約が増えてきました。</p>
                                    <p>しかし、まだまだ空いている日も多いので、引き続き宜しくお願いします！</p>
                                    <p>当店では、宴会プランに飲み放題を付ける事が勿論できるんですが、お酒を飲まれる方と飲まれない方で料金が変えられます（＾ω＾）</p>
                                    <p>お酒を飲まれる方は宴会料金+1000円、ソフトドリンクだけの方は＋500円でどちらも3時間制となっています。</p>
                                    <p>不正さえしなければ同グループでも対応出来ますので、是非ご利用してみて下さい！</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-12-08">2017年12月08日(金)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e3%81%b1%e3%81%a9/">ぱど</a></h3>
                                <div class="entry-content">
                                    <p>今週出ました地域紙「ぱど」に当店が載っております（＾ω＾）</p>
                                    <p>実は何回か掲載させていただいているのですが、直後の反響はなかなかです。</p>
                                    <p>ランチにはお席が埋まってしまい、入れない方も出てしまいます、、、</p>
                                    <p>ランチ時も予約は受け付けていますので、どうしてもの方はご予約をお願い致します！</p>
                                    <p>ディナーは、、、</p>
                                    <p>割と大丈夫な日が多いです_φ(･_･</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-12-05">2017年12月05日(火)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e3%81%a1%e3%82%87%e3%81%84%e9%a3%b2%e3%81%bf%e3%83%bb%e9%a3%b2%e3%81%bf%e6%94%be%e9%a1%8c/">ちょい飲み・飲み放題</a>
                                </h3>
                                <div class="entry-content">
                                    <p>最近少し前に始めたちょい飲みセットが出るようになりました。</p>
                                    <p>お好きなドリンク2杯とおつまみ盛り合わせのコラボで税込1000円♪</p>
                                    <p>最近の世の中の傾向的に、この街でもちょい飲みは需要がありそうです。</p>
                                    <p>当店ではちょっと飲みたい方にはちょい飲みセット、ガッツリ飲みたい方にも嬉しい飲み放題(3時間1280円)もやっています（＾ω＾）</p>
                                    <p>団体様には宴会のプランもございますので、皆様こぞってご利用ください！</p>
                                    <p>もちろんお食事だけ、コーヒーだけのご利用も大歓迎です(^-^)</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-12-03">2017年12月03日(日)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/12%e6%9c%88/">12月</a></h3>
                                <div class="entry-content">
                                    <p>早いもので今年も1ヶ月を切りました。</p>
                                    <p>忘年会シーズンという事もあり、当店も貸切含め少しずつ宴会のご予約が増えてきています。</p>
                                    <p>ですが、、、</p>
                                    <p>まだまだお席の空きのある日もたくさんございます！</p>
                                    <p>お酒の飲めない方用にソフトドリンク飲み放題等もご用意ありますので、お早目のご予約をお待ちしております(^-^)</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-12-01">2017年12月01日(金)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e3%82%b9%e3%83%91%e3%82%a4%e3%82%b9%e3%82%ab%e3%83%ac%e3%83%bc/">スパイスカレー</a>
                                </h3>
                                <div class="entry-content">
                                    <p>本日よりランチにスパイスカレーが仲間入りしました！(ドリンク付780円)</p>
                                    <p>ルゥを一切使わずクミン・コリアンダー等のスパイスをオリジナルで配合しました。</p>
                                    <p>香り高いスパイスカレーをどうぞご賞味下さいませ(^-^)</p>
                                    <p>具材等は週ごとに変更していきます！<a
                                                href="wordpress/wp-content/uploads/2017/12/0DAB8E16-A90E-4F7F-95E4-6236EAC701A5.jpeg"
                                                class="fbx-link fbx-instance"><img
                                                    class="alignnone size-thumbnail wp-image-1829"
                                                    src="wordpress/wp-content/uploads/2017/12/0DAB8E16-A90E-4F7F-95E4-6236EAC701A5-300x225.jpeg"
                                                    alt="" width="300" height="225"
                                                    srcset="wordpress/wp-content/uploads/2017/12/0DAB8E16-A90E-4F7F-95E4-6236EAC701A5-300x225.jpeg 300w, wordpress/wp-content/uploads/2017/12/0DAB8E16-A90E-4F7F-95E4-6236EAC701A5-768x576.jpeg 768w, wordpress/wp-content/uploads/2017/12/0DAB8E16-A90E-4F7F-95E4-6236EAC701A5-1000x750.jpeg 1000w"
                                                    sizes="(max-width: 300px) 100vw, 300px"></a></p>
                                </div>
                            </section>
                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-11-28">2017年11月28日(火)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/1129%e3%83%a9%e3%83%b3%e3%83%81%e8%b2%b8%e5%88%87%e3%81%a7%e3%81%99%e3%80%82/">11/29ランチ貸切です。</a>
                                </h3>
                                <div class="entry-content">
                                    <p>大変申し訳ございませんが、明日11/29はランチの11:00~13:00まで貸切営業となります。</p>
                                    <p>13:00以降に通常営業となりますので、どうぞ宜しくお願い致しますm(_ _)m</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-11-26">2017年11月26日(日)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e5%bf%98%e5%b9%b4%e4%bc%9a/">忘年会</a>
                                </h3>
                                <div class="entry-content">
                                    <p>もうすぐ11月も終わっちゃいますね。</p>
                                    <p>忘年会の時期が訪れようとしています。</p>
                                    <p>さぼてんcafeでも忘年会等に最適なコース料理を取り揃えております！</p>
                                    <p><span style="font-size: 28px; color: #ff0000;">デザート付コースが1500円から</span>！！</p>
                                    <p>さらに追加で飲み放題もつけられます！</p>
                                    <p><span style="font-size: 28px; color: #ff0000;">3時間ソフトドリンク飲み放題＋500円</span></p>
                                    <p><span style="font-size: 28px; color: #ff0000;">3時間アルコール70種飲み放題＋1000円</span>
                                    </p>
                                    <p>ちょこちょこ貸切も入ってきていますが、まだまだお席の空きがありますので、この機会に是非ご利用くださいませ^ – ^<a
                                                href="assets/display/img/dinner_02.jpg"
                                                class="fbx-link fbx-instance"><img
                                                    class="alignnone size-thumbnail wp-image-1078"
                                                    src="assets/display/img/dinner_02-300x170.jpg"
                                                    alt="要予約！さぼcafeパーティ" width="300" height="170"
                                                    srcset="assets/display/img/dinner_02-300x170.jpg 300w, assets/display/img/dinner_02-768x434.jpg 768w, assets/display/img/dinner_02.jpg 1000w"
                                                    sizes="(max-width: 300px) 100vw, 300px"></a></p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-11-22">2017年11月22日(水)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc%e5%a4%89%e6%9b%b4/">メニュー変更</a>
                                </h3>
                                <div class="entry-content">
                                    <p>題名には書いちゃいましたが、メニュー変更まだしておりません_φ(･_･</p>
                                    <p>来月からランチを含め、メニューを変えていきます！</p>
                                    <p>季節の食材等を盛り込んで絶賛製作中ですので、もうしばらくお待ちくださいませ。</p>
                                    <p>ちょい飲みや飲み放題、夜カフェセット等と一緒に楽しめると思いますので是非足を運んで頂けたらと思います(^-^)</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-11-20">2017年11月20日(月)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e9%a3%b2%e3%81%bf%e6%94%be%e9%a1%8c/">飲み放題</a>
                                </h3>
                                <div class="entry-content">
                                    <p>ちょい飲みセットに続きまして・・・</p>
                                    <p><span style="font-size: 28px; color: #ff00ff;">3時間単品飲み放題</span>も始まりました！！(1280円！)
                                    </p>
                                    <p>フードオーダーをお一人様2品以上はご注文をお願いしていますが、飲兵衛さんに嬉しい3時間制！</p>
                                    <p>居酒屋ばかりでなく、たまにはカフェでもがっつりいっちゃって下さい(￣▽￣)</p>
                                    <p>金曜・土曜は+200円となりますのでご了承下さいませ。</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-11-17">2017年11月17日(金)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e3%81%a1%e3%82%87%e3%81%84%e9%a3%b2%e3%81%bf%e3%82%bb%e3%83%83%e3%83%88/">ちょい飲みセット</a>
                                </h3>
                                <div class="entry-content">
                                    <p>さぼてんcafeの「ちょい飲みセット」始まりました！</p>
                                    <p>お好きなドリンク2杯+おつまみの盛り合わせで・・・</p>
                                    <p>&nbsp;</p>
                                    <p><span style="font-size: 24px; color: #ff00ff;"><strong>1000円</strong></span>ポッキリ！！(税込)税込
                                    </p>
                                    <p>&nbsp;</p>
                                    <p>ドリンクは生ビールでもシードルでもハイボールでも焼酎でも何でもOKです。(ボトル以外)</p>
                                    <p>さぁ、1000円握りしめて、さぼてんcafeのちょい飲みを堪能しちゃって下さい(￣▽￣)</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-11-13">2017年11月13日(月)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e3%81%93%e3%81%ae%e5%9c%b0%e5%9f%9f%e3%81%ae%e6%96%b9%e3%80%85/">この地域の方々</a>
                                </h3>
                                <div class="entry-content">
                                    <p>南林間に店をオープンして半年、南林間に住み始めてから8ヶ月位経ちました。</p>
                                    <p>お店のお客様もそうですが、この南林間に住んでいる人達は、俗にいう良い人がかなり多いように感じます。</p>
                                    <p>悪い意味ではなく、言葉通りのいい人です(^^)</p>
                                    <p>相手を思いやる心をみんな持っています。</p>
                                    <p>大人の方がそうだからだと思いますが、この地域の子供達(小中学生位)も挨拶とかしっかりできる子が多いです。</p>
                                    <p>以前都内の方で働いていましたが、もう雲泥の差です(￣▽￣)</p>
                                    <p>こういういい部分はこれからもしっかり残していってほしいと思います。</p>
                                    <p>&nbsp;</p>
                                    <p>他人事みたいに書いちゃってすみませんm(_ _)m</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-11-11">2017年11月11日(土)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e3%82%aa%e3%83%bc%e3%82%ac%e3%83%8b%e3%83%83%e3%82%af%e3%82%b3%e3%83%bc%e3%83%92%e3%83%bc/">オーガニックコーヒー</a>
                                </h3>
                                <div class="entry-content">
                                    <p>いよいよ寒くなってきましたね〜(*´Д｀*)</p>
                                    <p>当店でもホットコーヒーの注文が非常に多くなってきました。</p>
                                    <p>当店のコーヒーは、メキシコ産のオーガニックコーヒーを使用しております。</p>
                                    <p>注文後に豆を挽いていますので、香り高いコーヒーとなっていて最近特に人気が出てきています。</p>
                                    <p>是非一度試してみて下さいね(^^)<a href="assets/display/img/IMGP0573.jpg"
                                                           class="fbx-link fbx-instance"><img
                                                    class="alignnone size-thumbnail wp-image-380"
                                                    src="assets/display/img/IMGP0573-300x200.jpg" alt="" width="300"
                                                    height="200"
                                                    srcset="assets/display/img/IMGP0573-300x200.jpg 300w, assets/display/img/IMGP0573-768x512.jpg 768w, assets/display/img/IMGP0573-1000x667.jpg 1000w, assets/display/img/IMGP0573-272x182.jpg 272w"
                                                    sizes="(max-width: 300px) 100vw, 300px"></a></p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-11-08">2017年11月08日(水)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e3%82%aa%e3%83%bc%e3%83%97%e3%83%b3%e3%81%97%e3%81%a6%e5%8d%8a%e5%b9%b4%e7%b5%8c%e3%81%a1%e3%81%be%e3%81%97%e3%81%9f%ef%bc%81/">オープンして半年経ちました！</a>
                                </h3>
                                <div class="entry-content">
                                    <p>「さぼてんcafe」がオープンして半年経ちました！！(厳密には明日ですが)</p>
                                    <p>日々忙しく、何だかあっという間でした。</p>
                                    <p>その間に多くの常連様もでき、今のところ楽しい毎日を過ごせています(^.^)</p>
                                    <p>お昼はバタバタ、夜は落ち着きすぎ(笑)という状況が多いですね(￣▽￣)</p>
                                    <p>まだまだこれからですので、いろいろ工夫しながら頑張っていこうと思います！</p>
                                    <p>今後の「さぼてんcafe」に期待していて下さい！！</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-11-07">2017年11月07日(火)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e7%ab%8b%e5%86%ac/">立冬</a></h3>
                                <div class="entry-content">
                                    <p>本日「立冬」です。</p>
                                    <p>早いもので暦の上では冬なんですね。</p>
                                    <p>今年は(も?)あっという間に過ぎ去ろうとしてます(*´Д｀*)</p>
                                    <p>いろいろ変化を起こせた年ではありますが、いろいろ頭を悩ませ試行錯誤の毎日ですね〜。</p>
                                    <p>って今年を振り返るのはまだ早いですね！</p>
                                    <p>まだ2ヶ月弱ありますから！</p>
                                    <p>「さぼてんcafe」はまだまだいろんな事にチャレンジしていきますので、どうぞよろしくお願いします！！</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-11-03">2017年11月03日(金)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e3%81%9d%e3%81%97%e3%81%a6%e5%ad%a3%e7%af%80%e3%81%af%e7%a7%bb%e3%82%8a%e3%82%86%e3%81%8f/">そして季節は移りゆく</a>
                                </h3>
                                <div class="entry-content">
                                    <p>こんにちは☆</p>
                                    <p>今回が今年最後の三連休だそうです(^.^)!!もう11月ですからねー(焦)</p>
                                    <p>&nbsp;</p>
                                    <p>ボーッとしてると年末がやってきちゃうので、自分は連休中にコートの準備とかを終わらせたいですね(￣▽￣)近場の紅葉も見に行きたいなー♪</p>
                                    <p>&nbsp;</p>
                                    <p>お休みの予定が決まっている方もそうでない方も、さぼてんcafeでひと息ついていきませんか？今日も元気に営業しております(*´Д｀*)！</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-10-31">2017年10月31日(火)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e3%82%b9%e3%83%94%e3%83%aa%e3%83%81%e3%83%a5%e3%82%a2%e3%83%ab%e3%83%92%e3%83%bc%e3%83%a9%e3%83%bc%e3%80%8c%e7%b5%b5%e5%a4%a2%e3%81%88%e3%81%bf%e3%80%8d%e3%81%95%e3%82%93/">スピリチュアルヒーラー「絵夢(えみ)」さん</a>
                                </h3>
                                <div class="entry-content">
                                    <p>昨日ですが当店にて、</p>
                                    <p>スピリチュアルヒーラー「絵夢」さんの鑑定イベントを行いました！</p>
                                    <p>50代の女性の方が仕事や人生についてのアドバイスを受け、悩みの解消ができたと喜んでいらっしゃいました(^.^)</p>
                                    <p>今後も定期的に「絵夢」さんの鑑定や、その他イベントは可能な限りやっていこうかなと思っていますので、どうぞよろしくお願いします！</p>
                                    <p>
                                        <a href="wordpress/wp-content/uploads/2017/10/KIMG0170.jpg"
                                           class="fbx-link fbx-instance"><img
                                                    class="alignnone size-thumbnail wp-image-1709"
                                                    src="wordpress/wp-content/uploads/2017/10/KIMG0170-300x169.jpg"
                                                    alt="" width="300" height="169"
                                                    srcset="wordpress/wp-content/uploads/2017/10/KIMG0170-300x169.jpg 300w, wordpress/wp-content/uploads/2017/10/KIMG0170-768x432.jpg 768w, wordpress/wp-content/uploads/2017/10/KIMG0170-1000x563.jpg 1000w"
                                                    sizes="(max-width: 300px) 100vw, 300px"></a></p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-10-29">2017年10月29日(日)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e3%81%be%e3%81%9f%e5%8f%b0%e9%a2%a8%d0%b4%ef%bd%80/">また台風(*´Д｀*)</a>
                                </h3>
                                <div class="entry-content">
                                    <p>特大の台風が過ぎたばかりなのにまたヤツがいらっしゃいました。</p>
                                    <p>全くもって歓迎できませんね(*´Д｀*)</p>
                                    <p>前回程の強さではないみたいですが、それでも被害は出ると思います。</p>
                                    <p>お客様も減ってしまって、当店ではすでに被害は深刻です・・・</p>
                                    <p>さっさと行ってしまわれるのを願うばかりです_φ(･_･</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-10-27">2017年10月27日(金)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e9%87%91%e6%9b%9c%e3%83%bb%e5%9c%9f%e6%9b%9c%e3%81%ae%e3%82%b5%e3%83%bc%e3%83%93%e3%82%b9%e3%83%87%e3%83%bc/">金曜・土曜のサービスデー</a>
                                </h3>
                                <div class="entry-content">
                                    <p>大好評の「毎日嬉しいサービスデー」絶賛開催中です！</p>
                                    <p>金曜・土曜は・・・</p>
                                    <p>宴会利用のお客様はお会計より10%off！(基本要予約)</p>
                                    <p>宴会のしやすい週末に、お得に楽しんでみませんか？？</p>
                                    <p>当店は8名様より貸し切りもできますので、小さなお子様連れのママさんや女子会等にもうってつけです^ – ^</p>
                                    <p>沢山の方のご利用お待ちしております！</p>
                                    <p>&nbsp;</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-10-25">2017年10月25日(水)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e6%9c%ac%e6%97%a5/">本日</a></h3>
                                <div class="entry-content">
                                    <p>19:00~閉店まで貸し切り営業となります☆</p>
                                    <p>(それまでの時間は一般利用のお客様もお越しいただけます)</p>
                                    <p>&nbsp;</p>
                                    <p>宜しくお願いしますm(_ _)m</p>
                                    <p>&nbsp;</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-10-23">2017年10月23日(月)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e3%82%84%e3%81%a3%e3%81%b1%e8%87%aa%e6%b0%91%e5%85%9a%e3%81%a7%e3%81%99%e3%81%8b%e3%83%bb%e3%83%bb%e3%83%bb/">やっぱ自民党ですか・・・</a>
                                </h3>
                                <div class="entry-content">
                                    <p>選挙終わりましたね。</p>
                                    <p>予想通りの自民党圧勝。</p>
                                    <p>良いのか悪いのか・・・</p>
                                    <p>自民党がいいのではなく、他に目ぼしいトコがないっていう人が選挙参加者には多かったみたいですね。</p>
                                    <p>色々な疑惑はあれど、実際景気は良くなってますし（実感はあまりありませんが）現政党では自民党でいい気もしてます、個人的には。</p>
                                    <p>出来れば今後の安心を若い人達に与えてあげられる施策をお願いしたいところですね。</p>
                                    <p>じゃなきゃ少子化は進むだけだと思いますので。</p>
                                    <p>飲食に携わってると人手不足が本当に深刻になってきているように感じます。</p>
                                    <p>要因はいろいろあってすぐに効果がでるものでもないですが、やれる事からやっていかないと手遅れになってしまうんじゃないかと思っています(*´Д｀*)</p>
                                    <p>たまには世の中に目を向けて、真面目にブログを書いてみました！</p>
                                    <p>今日も元気に「さぼてんcafe」は営業しております！！</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-10-22">2017年10月22日(日)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e5%8f%b0%e9%a2%a8-2/">台風</a>
                                </h3>
                                <div class="entry-content">
                                    <p>台風来てますね(*´Д｀*)</p>
                                    <p>関東は今夜遅くから明日にかけてがピークになるそうです。</p>
                                    <p>でも、もうバッチリ雨も降ってますし、風もだんだん強くってきています。</p>
                                    <p>当店は一応しっかり営業しておりますが、今夜はどうなる事やら_φ(･_･</p>
                                    <p>どうぞ皆様、雨避け・風避けに「さぼてんcafe」をお願いします！</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-10-21">2017年10月21日(土)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e8%89%b2%e3%80%85%e8%bf%91%e3%81%a5%e3%81%84%e3%81%a6%e3%81%be%e3%81%99%e3%81%ad/">色々近づいてますね</a>
                                </h3>
                                <div class="entry-content">
                                    <p>今週末は何やら色々近づいてきてます(*´Д｀*)</p>
                                    <p>台風&amp;選挙</p>
                                    <p>日曜の選挙、皆様はどなたに投票するのか決めたのでしょうか？</p>
                                    <p>そもそも選挙に行かれるのでしょうか？</p>
                                    <p>毎回投票率は下がっているらしいですが、問題ある議員さんが多くマニフェストがあっても実現しきれていない部分も多々あるので仕方ない気がします。</p>
                                    <p>更に大型の台風と選挙が一緒にやってきそうなので、今回は今まで以上に悲惨な結果になりそうな・・・</p>
                                    <p>選挙も大事ですが、台風の直撃は本当勘弁してもらいたいです(*´Д｀*)</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-10-17">2017年10月17日(火)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e9%9b%a8%e7%b6%9a%e3%81%8d%e3%81%be%e3%81%99%e3%81%ad%d0%b4%ef%bd%80/">雨続きますね(*´Д｀*)</a>
                                </h3>
                                <div class="entry-content">
                                    <p>最近急に寒くなったと思ったら、雨も降り続けてダブルパンチを受けています。</p>
                                    <p>何故ならこの街（この通り？）は雨が降ると客足がわかりやすいように減ってしまいます(*´Д｀*)</p>
                                    <p>台風のような天気ならわかるんですが、シトシト雨でも寂しい感じになっちゃうんです。</p>
                                    <p>でも、、、</p>
                                    <p>負けません！</p>
                                    <p>雨にもマケズ、風にも台風にもマケズに元気に営業していきます(^-^)</p>
                                    <p>どうぞ皆さん、お立ち寄り下さいませm(_ _)m</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-10-16">2017年10月16日(月)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e6%96%b0%e6%97%a5%e6%9c%ac%e9%85%92%e5%85%a5%e8%8d%b7/">新日本酒入荷</a>
                                </h3>
                                <div class="entry-content">
                                    <p>今回も新しい日本酒入りました！</p>
                                    <p>「八鹿 本醸造辛口」</p>
                                    <p>きりっと冴えわたるスッキリとした飲み口を是非試してみて下さい。</p>
                                    <p>いつもと同じく、無くなり次第終了となりますm(_ _)m<a
                                                href="wordpress/wp-content/uploads/2017/10/image.jpg"
                                                class="fbx-link fbx-instance"><img
                                                    class="alignnone size-thumbnail wp-image-1690"
                                                    src="wordpress/wp-content/uploads/2017/10/image-300x225.jpg"
                                                    alt="" width="300" height="225"
                                                    srcset="wordpress/wp-content/uploads/2017/10/image-300x225.jpg 300w, wordpress/wp-content/uploads/2017/10/image-768x576.jpg 768w, wordpress/wp-content/uploads/2017/10/image-1000x750.jpg 1000w"
                                                    sizes="(max-width: 300px) 100vw, 300px"></a></p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-10-15">2017年10月15日(日)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e6%9d%a5%e9%80%b1%e3%81%ae%e9%80%b1%e6%9b%bf%e3%82%8f%e3%82%8a%e7%94%9f%e3%83%91%e3%82%b9%e3%82%bf/">来週の週替わり生パスタ</a>
                                </h3>
                                <div class="entry-content">
                                    <p>ランチメニューの生パスタは週替わりで変えてます。</p>
                                    <p>明日からのパスタは・・・</p>
                                    <p>「生姜香るアサリとキノコの和風パスタ！」</p>
                                    <p>さっぱり生姜醤油ベースと秋らしいたくさんの木の子達の相性は抜群‼︎</p>
                                    <p>アサリも殻を剥いてあるものを使用していますので食べにくい等の煩わしさもありません(￣▽￣)</p>
                                    <p>お昼は割とすぐ席が埋まっちゃう事が多いですが、チャンスがあれば是非お試し下さい。</p>
                                    <p>席の予約も受け付けております！<a
                                                href="wordpress/wp-content/uploads/2017/10/IMG_0280.jpg"
                                                class="fbx-link fbx-instance"><img
                                                    class="alignnone size-thumbnail wp-image-1686"
                                                    src="wordpress/wp-content/uploads/2017/10/IMG_0280-300x225.jpg"
                                                    alt="" width="300" height="225"
                                                    srcset="wordpress/wp-content/uploads/2017/10/IMG_0280-300x225.jpg 300w, wordpress/wp-content/uploads/2017/10/IMG_0280-768x576.jpg 768w, wordpress/wp-content/uploads/2017/10/IMG_0280-1000x750.jpg 1000w"
                                                    sizes="(max-width: 300px) 100vw, 300px"></a></p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-10-13">2017年10月13日(金)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e7%a7%8b%e3%82%89%e3%81%97%e3%81%84%ef%bc%9f/">秋らしい？</a>
                                </h3>
                                <div class="entry-content">
                                    <p>今日からグッと気温が下がってやっと秋らしい感じになってきましたね。</p>
                                    <p>雨もパラついていますのでその影響もあるとは思いますが(￣▽￣)</p>
                                    <p>今週末は有難い事に少しご予約頂いておりますが、まだまだお席の空きはありますので、沢山の方のご来店お待ちしております！</p>
                                    <p>8名様以上で貸切営業にもできますので宜しくお願いしますm(_ _)m<a href="assets/display/img/access_01.jpg"
                                                                            class="fbx-link fbx-instance"><img
                                                    class="alignnone size-thumbnail wp-image-1310"
                                                    src="assets/display/img/access_01-300x200.jpg" alt="さぼてんcafe　外観"
                                                    width="300" height="200"
                                                    srcset="assets/display/img/access_01-300x200.jpg 300w, assets/display/img/access_01-768x512.jpg 768w, assets/display/img/access_01-272x182.jpg 272w, assets/display/img/access_01.jpg 800w"
                                                    sizes="(max-width: 300px) 100vw, 300px"></a></p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-10-10">2017年10月10日(火)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e7%9c%9f%e5%a4%8f%e6%97%a5%e3%81%a3%e3%81%a6%e3%83%bb%e3%83%bb%e3%83%bb/">真夏日って・・・</a>
                                </h3>
                                <div class="entry-content">
                                    <p>10月中旬ですね。</p>
                                    <p>本日関東地方は真夏日予想が出ています。</p>
                                    <p>&nbsp;</p>
                                    <p>・・・・・真夏日って(￣▽￣)</p>
                                    <p>&nbsp;</p>
                                    <p>本当最近は天候が不安定になっちゃいましたね~。</p>
                                    <p>地球規模で何やら異変が起きてる・・・のかも。</p>
                                    <p>ま、そんな事を考えてても仕方ないので今日も元気に営業していきます！</p>
                                    <p>皆様、是非お立ち寄り下さい！！</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-10-06">2017年10月06日(金)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e3%81%a1%e3%82%87%e3%81%84%e5%91%91%e3%81%bf%e7%b5%82%e4%ba%86/">ちょい呑み終了</a>
                                </h3>
                                <div class="entry-content">
                                    <p>大変盛り上がった「南林間ちょい呑みフェスティバル」が終了致しました。</p>
                                    <p>当店にもおもっていた以上のお客様にご来店いただきました。</p>
                                    <p>ありがとうございます！</p>
                                    <p>ただ、当店はとっても小さなお店ですので、満席で入れなかったお客様もいらっしゃいました。</p>
                                    <p>申し訳ございません！</p>
                                    <p>今後とも皆様に好きになってもらえるようなお店作りに励んでいきたいと思いますので、末長く宜しくお願いします(^-^)</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>あと、ちょい呑みチケットが余ってしまった方、捨てないで下さい！</p>
                                    <p>10/10まではチケット1枚700円の金券として参加店舗では使用できます。</p>
                                    <p>もちろん、当店でもご使用いただけますので、是非ご来店下さいませm(_ _)m</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-10-02">2017年10月02日(月)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e5%8d%97%e6%9e%97%e9%96%93%e3%81%a1%e3%82%87%e3%81%84%e5%91%91%e3%81%bf%e3%83%95%e3%82%a7%e3%82%b9%e3%83%86%e3%82%a3%e3%83%90%e3%83%ab/">南林間ちょい呑みフェスティバル</a>
                                </h3>
                                <div class="entry-content">
                                    <p>遂にきました！！</p>
                                    <p>明日10/3・明後日10/4は「南林間ちょい呑みフェスティバル」が開催されます！</p>
                                    <p>当店は初参加となりますので、まださぼてんcafeを知らない人にも来やすいイベントかと思います。</p>
                                    <p>前日の今日から準備でバタバタですが、せっかくの街をあげてのイベントですので、お客様と一緒に私達も盛り上がって楽しんじゃいたいと思います！</p>
                                    <p>沢山のお客様が来てくれますよ~に(*´꒳`*)</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-10-01">2017年10月01日(日)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/100%e5%86%86%e7%94%9f%e3%83%93%e3%83%bc%e3%83%ab%e3%81%ae%e6%97%a5/">100円生ビールの日</a>
                                </h3>
                                <div class="entry-content">
                                    <p>早いもので10月に突入しました。</p>
                                    <p>&nbsp;</p>
                                    <p>大分涼しくなってきて、過ごしやすくはなりましたね(*´꒳`*)</p>
                                    <p>&nbsp;</p>
                                    <p>さて、本日は恒例の・・・</p>
                                    <p>&nbsp;</p>
                                    <p>「生ビール・生シードル100円」デーです！</p>
                                    <p>&nbsp;</p>
                                    <p>ビール好きには堪らない一日！</p>
                                    <p>&nbsp;</p>
                                    <p>キンキンに冷やしてお待ちしておりますので、どうぞ皆さんご利用くださいませ(^-^)<a
                                                href="assets/display/img/IMGP0567.jpg"
                                                class="fbx-link fbx-instance"><img
                                                    class="alignnone size-thumbnail wp-image-383"
                                                    src="assets/display/img/IMGP0567-300x200.jpg" alt="" width="300"
                                                    height="200"
                                                    srcset="assets/display/img/IMGP0567-300x200.jpg 300w, assets/display/img/IMGP0567-768x512.jpg 768w, assets/display/img/IMGP0567-1000x667.jpg 1000w, assets/display/img/IMGP0567-272x182.jpg 272w"
                                                    sizes="(max-width: 300px) 100vw, 300px"></a></p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-09-30">2017年09月30日(土)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e3%81%82%e3%82%8c%e3%81%a3%e3%81%84%e3%81%a4%e3%81%ae%e9%96%93%e3%81%ab%ef%bc%9f%ef%bc%81/">あれっいつの間に？！</a>
                                </h3>
                                <div class="entry-content">
                                    <p>今日で9月も終わりなんですね(°▽°)</p>
                                    <p>この前8月が終わったような気がしてました(笑)</p>
                                    <p>だけど最近では朝晩がだんだん涼しくなってきて、今日の空もすっかり秋らしい雲が浮かんでいましたね(^-^)</p>
                                    <p>着実に時間は流れているので、自分もその流れに取り残されないようにしたいです(*´꒳`*)</p>
                                    <p>&nbsp;</p>
                                    <p>そして！いよいよ来週3日(火)・4日(水)は、さぼてんcafe初参加の「南林間ちょい呑みフェスティバル」です☆</p>
                                    <p>全部で16席の当店はどうなってしまうのか？そもそもお客様は来てくれるのか？笑</p>
                                    <p>不安は尽きませんが、店長とお手伝いの2名で誠心誠意頑張りますので、機会がありましたら是非さぼてんcafeにお越し下さいませm(_ _)m</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-09-27">2017年09月27日(水)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e5%8f%a3%e3%82%b3%e3%83%9f/">口コミ</a>
                                </h3>
                                <div class="entry-content">
                                    <p>「さぼてんcafe」をオープンして早いもので4ヶ月半。</p>
                                    <p>少しずつお客様も増えてきて、地域の皆様に知っていただけるようになってきているように思います。（もちろん、まだまだ少ない事は分かってはいますが）</p>
                                    <p>気付けばいろいろな媒体に当店の口コミがチラホラ・・・</p>
                                    <p>有難い事にお褒めのお言葉が多いですm(_ _)m</p>
                                    <p>手を抜くつもりは一切ありませんが、今まで以上に1組1組を大切に、真摯に対応しなきゃいけないと、改めて喝を入れ直したところです！</p>
                                    <p>今後とも「さぼてんcafe」を宜しくお願い致します！！</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-09-25">2017年09月25日(月)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e3%83%a9%e3%83%b3%e3%83%81%e3%81%a8%e3%83%87%e3%82%a3%e3%83%8a%e3%83%bc/">ランチとディナー</a>
                                </h3>
                                <div class="entry-content">
                                    <p>当店は定休日の木曜日以外、毎日ランチとディナーを営業しております。</p>
                                    <p>&nbsp;</p>
                                    <p>お陰様でランチは結構忙しくさせていただいています。</p>
                                    <p>&nbsp;</p>
                                    <p>平日も週末も、客層は大分変わりはしますが、たくさんのお客様がご来店下さいます。有難いことです。</p>
                                    <p>&nbsp;</p>
                                    <p>しかしディナーは・・・</p>
                                    <p>&nbsp;</p>
                                    <p>週末こそそこそこですが、平日は大分静かです(*´Д｀*)</p>
                                    <p>&nbsp;</p>
                                    <p>皆さん！！</p>
                                    <p>&nbsp;</p>
                                    <p>平日のディナー帯狙い目ですよ！</p>
                                    <p>&nbsp;</p>
                                    <p>静かにゆっくりご利用したい方、お気軽にお立ち寄り下さいませ。
                                        <a href="assets/display/img/drink_02.png" class="fbx-link fbx-instance">
                                            <img class="alignnone size-thumbnail wp-image-1196"
                                            src="assets/display/img/drink_02-300x172.png" alt="樽詰生シードル"
                                            width="300" height="172"
                                            srcset="assets/display/img/drink_02-300x172.png 300w, assets/display/img/drink_02-768x441.png 768w, assets/display/img/drink_02.png 1000w"
                                            sizes="(max-width: 300px) 100vw, 300px">
                                        </a></p>
                                    <p>&nbsp;</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-09-22">2017年09月22日(金)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e6%98%8e%e6%97%a5%e3%81%af20%e6%99%82%e3%82%88%e3%82%8a%e8%b2%b8%e5%88%87%e5%96%b6%e6%a5%ad%e3%81%a7%e3%81%99%e3%80%82/">明日は20時より貸切営業です。</a>
                                </h3>
                                <div class="entry-content">
                                    <p>明日9月23日は20時より貸切営業となります！</p>
                                    <p>予定されていた方、申し訳ございませんm(_ _)m</p>
                                    <p>19時30分くらいまでは行けちゃいますので、早い時間のご来店をお待ちしております。</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-09-20">2017年09月20日(水)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e3%81%82%e3%81%a82%e9%80%b1%e9%96%93/">あと2週間</a>
                                </h3>
                                <div class="entry-content">
                                    <p>10月3日(火)4(水)は「南林間ちょい呑みフェスティバル」があります。</p>
                                    <p>当店も初参加しちゃいます(^-^)/</p>
                                    <p>&nbsp;</p>
                                    <p>どんなイベントか簡単に説明すると、</p>
                                    <p>参加者は、まず3枚つづりになっている「ちょい呑み券」を購入してもらいます。</p>
                                    <p>参加店舗はそれぞれ「ちょい呑みメニュー」を用意していて、ちょい呑み券1枚につき、1店舗のメニューをご利用頂けます。</p>
                                    <p>つまり、ちょい呑み期間中は、南林間エリアでお得にご飲食してもらえる素敵な二日間なのです(°▽°)♪♪</p>
                                    <p>前売り券は、当店を始め参加店舗全店にて¥2,500でご購入頂けます。</p>
                                    <p>当日券も別会場で販売してるそうです☆</p>
                                    <p>&nbsp;</p>
                                    <p>南林間には当店以外にも魅力的なお店がいっぱいあるので、南林間に来たことのない方もこの機会に是非お越し下さい（＾ω＾）</p>
                                    <p>&nbsp;</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-09-19">2017年09月19日(火)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e4%bd%93%e8%aa%bf%e7%ae%a1%e7%90%86/">体調管理</a>
                                </h3>
                                <div class="entry-content">
                                    <p>台風が去って、また夏の暑さが戻ってきましたね(*´꒳`*)</p>
                                    <p>&nbsp;</p>
                                    <p>当店では暫くお休みしていた冷房が再稼働致しました！</p>
                                    <p>&nbsp;</p>
                                    <p>9月も終盤なのに真夏日って・・・</p>
                                    <p>&nbsp;</p>
                                    <p>こう気温の変化が激しいと体調管理が大変ですが、どうぞ皆さん御自愛下さいね。</p>
                                    <p>&nbsp;</p>
                                    <p>かくいう自分も今月は体調不良で一日お休み頂いちゃいましたが(*´Д｀*)</p>
                                    <p>&nbsp;</p>
                                    <p>うん、今後は気をつけていきま~す！</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-09-17">2017年09月17日(日)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e5%8f%b0%e9%a2%a8/">台風</a></h3>
                                <div class="entry-content">
                                    <p>来てますね！</p>
                                    <p>&nbsp;</p>
                                    <p>また日本列島を縦断する感じだそうです(*´Д｀*)</p>
                                    <p>&nbsp;</p>
                                    <p>連休中の天気が最悪で家で過ごす方も多いと思います。</p>
                                    <p>&nbsp;</p>
                                    <p>今のところ、大和市は小雨がぱらつく程度ですので、今日も明日も首を長くして待ってますね〜( ^ω^ )</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-09-15">2017年09月15日(金)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e8%a1%8c%e6%a5%bd%e3%82%b7%e3%83%bc%e3%82%ba%e3%83%b3%e2%98%86/">行楽シーズン☆</a>
                                </h3>
                                <div class="entry-content">
                                    <p>土曜日から三連休ですね(^-^)</p>
                                    <p>おかげさまで、連休中を含む数日はご予約を頂いております。</p>
                                    <p>いつもさぼてんcafeをご利用して下さり、本当にありがとうございます。</p>
                                    <p>&nbsp;</p>
                                    <p>さぼてんcafeではお得なランチセットやスイーツセットの他に、飲み放題がついた宴会メニューもございます( ^ω^ )</p>
                                    <p>3名様からご利用でき、3時間制でサラダやメイン料理など計7品のお料理がついています。</p>
                                    <p>詳しくはメニューのページをご覧下さい♪</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-09-13">2017年09月13日(水)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e3%83%a9%e3%83%b3%e3%83%81%e3%83%8f%e3%83%b3%e3%83%90%e3%83%bc%e3%82%b0/">ランチハンバーグ</a>
                                </h3>
                                <div class="entry-content">
                                    <p>ランチメニューにデミグラスソースの手捏ねハンバーグがあるんですが・・・</p>
                                    <p>&nbsp;</p>
                                    <p>毎日数量限定で販売させていただいています(*´Д｀*)</p>
                                    <p>&nbsp;</p>
                                    <p>早い時間に品切れになってしまう可能性も高いです。</p>
                                    <p>&nbsp;</p>
                                    <p>なので、</p>
                                    <p>&nbsp;</p>
                                    <p>前日までのご予約とハンバーグを食べる旨伝えていただければ、人数分は確保できますので、どうしてもというお客様はご予約をお願い致します！</p>
                                    <p>&nbsp;</p>
                                    <p>いろいろ問題があり、多数準備する事が難しいので宜しくお願いします。<a
                                                href="assets/display/img/20170622_174036.jpg"
                                                class="fbx-link fbx-instance"><img
                                                    class="alignnone size-thumbnail wp-image-1581"
                                                    src="assets/display/img/20170622_174036-300x400.jpg" alt=""
                                                    width="300" height="400"
                                                    srcset="assets/display/img/20170622_174036-300x400.jpg 300w, assets/display/img/20170622_174036-768x1024.jpg 768w, assets/display/img/20170622_174036-1000x1333.jpg 1000w, assets/display/img/20170622_174036.jpg 1354w"
                                                    sizes="(max-width: 300px) 100vw, 300px"></a></p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-09-12">2017年09月12日(火)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e2%97%8b%e2%97%8b%e3%81%ae%e7%a7%8b/">○○の秋</a>
                                </h3>
                                <div class="entry-content">
                                    <p>日が落ちるのが早くなりましたね☆</p>
                                    <p>9月も中盤になりましたが、この秋どんなことに挑戦しますか？</p>
                                    <p>&nbsp;</p>
                                    <p>自分は今月に入ってから「ドラクエ11」を始めました(´∀｀)♪</p>
                                    <p>仕事もあるのであまり長時間できませんが、プレイ中に得られるヒントを使ってるストーリーを進めていくのが楽しいです(°▽°)</p>
                                    <p>梨や巨峰など、秋のフルーツもいっぱい食べたいなぁ(*´Д｀*)</p>
                                    <p>食欲の秋も満喫しつつ、今日もさぼてんcafe元気に営業しております☆</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-09-11">2017年09月11日(月)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e5%a4%9c%e3%82%ab%e3%83%95%e3%82%a7%e3%82%bb%e3%83%83%e3%83%88/">夜カフェセット</a>
                                </h3>
                                <div class="entry-content">
                                    <p>さぼてんcafeには、ディナー帯限定の「夜カフェセット」があります！</p>
                                    <p>前菜3種盛り+ソフトドリンク+メインのお食事（選べます！）で・・・</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>
                                        <span style="font-size: 28px; color: #ff0000; background-color: #ccffcc;"><strong>980円！！</strong></span>
                                    </p>
                                    <p>&nbsp;</p>
                                    <p>因みに税込！</p>
                                    <p>&nbsp;</p>
                                    <p>ソフトドリンクをアルコールに変更したりもできます。（+200円）</p>
                                    <p>&nbsp;</p>
                                    <p>最近の傾向では、1~2名の夕飯代わりのお食事をしたい方がご利用して下さってます。</p>
                                    <p>お酒の飲めない方も是非「夜カフェセット」をお試しあれっ(*´꒳`*)<a href="assets/display/img/lunch_03.png" class="fbx-link fbx-instance">
                                        <img class="alignnone size-thumbnail wp-image-1018"
                                        src="assets/display/img/lunch_03-300x172.png" alt="週替りパスタランチ"
                                        width="300" height="172"
                                        srcset="assets/display/img/lunch_03-300x172.png 300w, assets/display/img/lunch_03-768x440.png 768w, assets/display/img/lunch_03.png 1000w"
                                        sizes="(max-width: 300px) 100vw, 300px"></a></p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-09-10">2017年09月10日(日)</time>
                                </div>
                                <h3 class="entry-title">
                                    <a href="blog/%e3%82%b5%e3%83%bc%e3%83%93%e3%82%b9%e3%83%87%e3%83%bc%e3%80%81%e6%97%a5%e6%9b%9c%e3%81%af%e3%83%bb%e3%83%bb%e3%83%bb/">サービスデー、日曜は・・・</a>
                                </h3>
                                <div class="entry-content">
                                    <p>ディナー帯限定のサービスデー！</p>
                                    <p>本日日曜はめちゃ得な・・・</p>
                                    <p>「生ビール&amp;生シードル一杯100円！！」</p>
                                    <p>&nbsp;</p>
                                    <p>生ビール好きや生シードルを試してみたい方は是非お得な日曜にご来店してみて下さい。</p>
                                    <p>お会計時の伝票見てビックリですよ(´∀｀)</p>
                                    <p>&nbsp;</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-09-09">2017年09月09日(土)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e6%98%a8%e6%97%a5%e3%81%af%e3%82%b9%e3%83%9f%e3%83%9e%e3%82%bb%e3%83%b3/">昨日はスミマセン</a>
                                </h3>
                                <div class="entry-content">
                                    <p>昨日は急遽体調をくずしてしまい、臨時にお店をお休みとさせていただきました(*´Д｀*)</p>
                                    <p>大変ご迷惑をおかけしました。</p>
                                    <p>こういう時、1人でやってると辛いですね。</p>
                                    <p>しっかり休んで全快しましたので、今後とも宜しくお願いします！</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-09-06">2017年09月06日(水)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e3%81%a8%e3%81%86%e3%81%bf%e3%82%87%e3%81%86/">とうみょう</a>
                                </h3>
                                <div class="entry-content">
                                    <p>こんにちは(^O^)</p>
                                    <p>皆さん豆苗って食べたことありますか？自分はさっき初めて食べました。</p>
                                    <p>少し前に話題になってたと思うのですが、何となく「苦そう」という勝手なイメージで避けてました(&gt;_&lt;)</p>
                                    <p>でも全然そんなことないんですね！食感がシャキシャキしてて美味しかったです☆安いし栄養もあるそうなので、これからは積極的に食べようと思います♪</p>
                                    <p>今月に入って、すっかり秋めいた陽気になってきましたね！今日もさぼてんcafe元気に営業中です(°▽°)</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-09-05">2017年09月05日(火)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e7%a8%8e%e8%be%bc%e4%be%a1%e6%a0%bc/">税込価格</a>
                                </h3>
                                <div class="entry-content">
                                    <p>あまり知られてないみたいなんですが・・・</p>
                                    <p>実は・・・</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>当店のメニューは全て<span
                                                style="font-size: 32px; color: #ff0000;"><strong>税込価格</strong></span>となっています！
                                    </p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>
                                        <a href="wordpress/wp-content/uploads/2017/09/IMG_0279.png"
                                           class="fbx-link fbx-instance"><img
                                                    class="alignnone size-thumbnail wp-image-1617"
                                                    src="wordpress/wp-content/uploads/2017/09/IMG_0279-300x214.png"
                                                    alt="" width="300" height="214"
                                                    srcset="wordpress/wp-content/uploads/2017/09/IMG_0279-300x214.png 300w, wordpress/wp-content/uploads/2017/09/IMG_0279.png 357w"
                                                    sizes="(max-width: 300px) 100vw, 300px"></a>なぜなら・・・</p>
                                    <p>わかりやすいし、計算しやすいし、お客様にやさしいから(´∀｀)</p>
                                    <p>&nbsp;</p>
                                    <p>もうどうしようもなくなるまでは頑張りますので、ドシドシご来店をお待ちしております☆</p>
                                    <p>美味しい料理とお酒をリーズナブルに楽しんじゃって下さい！</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-09-04">2017年09月04日(月)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e7%88%86%e9%9f%b3%e3%81%ae%e5%a4%a7%e5%92%8c%e5%b8%82/">爆音の大和市</a>
                                </h3>
                                <div class="entry-content">
                                    <p>大和市に店をオープンしてもうすぐ4ヶ月。</p>
                                    <p>ここに来たばかりの頃は飛行機の爆音に毎日ビビってました(*´Д｀*)</p>
                                    <p>いや、話には聞いてたんですけどね・・・</p>
                                    <p>想像以上に爆音なんですもん。</p>
                                    <p>もうそんな音にもすっかり慣れてきてますね(^O^)</p>
                                    <p>&nbsp;</p>
                                    <p>さて、空いたら終わりの日本酒シリーズ！</p>
                                    <p>今回は「特別純米酒 一ノ蔵」！</p>
                                    <p>出る時は一気に出ちゃいますのでお早めにどうぞ〜(´∀｀)</p>
                                    <p>&nbsp;</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-09-03">2017年09月03日(日)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e6%9c%ac%e6%97%a5%e8%b2%b8%e5%88%87%e3%81%a7%e3%81%99%ef%bc%81/">本日貸切です！</a>
                                </h3>
                                <div class="entry-content">
                                    <p>本日ディナー帯は貸切営業となります。</p>
                                    <p>ご来店予定だった方、申し訳ございませんm(__)m</p>
                                    <p>当店では8名様以上で店内全貸切できますので、女子会・ママ会・仲間との飲み会等に是非ご利用下さいませ(^O^)</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-09-01">2017年09月01日(金)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e4%bb%8a%e6%97%a5%e3%81%8b%e3%82%899%e6%9c%88%e2%98%86/">今日から9月☆</a>
                                </h3>
                                <div class="entry-content">
                                    <p>8月があっという間に過ぎ去ったと感じたのは僕だけでしょうか(笑)</p>
                                    <p>台風が接近してるそうなので、皆さんお気をつけ下さい(´∀｀)</p>
                                    <p>さぼてんcafe本日も元気に営業中です(^O^)☆</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-08-29">2017年08月29日(火)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e5%b9%b3%e5%92%8c%e3%81%a8%e3%81%af%e3%83%bb%e3%83%bb%e3%83%bb/">平和とは・・・</a>
                                </h3>
                                <div class="entry-content">
                                    <p>本日朝早く、北朝鮮がミサイルを発射し、東北地方の上空を飛び越えて海に落ちたそうです。</p>
                                    <p>かなりの範囲に「Jアラート」が発令されたそうですが、みなさん避難したんでしょうか？</p>
                                    <p>自分の地域にはJアラートの発令は無かったんですが、同じ立場だったとしても避難しなかったと思います。</p>
                                    <p>心の底から平和ボケしてますね・・・</p>
                                    <p>ミサイルって本当に撃ち落とせるんですかね？</p>
                                    <p>政府やアメリカは本当に国民を守ってくれるんですかね？</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>な~んて事をちょこっと考えてました。</p>
                                    <p>平和は尊い気がしますが、当たり前じゃないって心の何処かでは思っていたいですね(*´Д｀*)</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-08-27">2017年08月27日(日)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e8%b2%b8%e5%88%87%e5%96%b6%e6%a5%ad/">貸切営業</a>
                                </h3>
                                <div class="entry-content">
                                    <p>昨日のディナー帯&amp;本日のランチ帯は貸切とさせて頂きました！</p>
                                    <p>どちらも8名様程の小団体でしたが、周りにお客様もいなく気兼ねなく楽しんで頂けたんじゃないかと思います。</p>
                                    <p>当店では<span style="font-size: 32px; color: #ff0000;">8名様から店内全貸切</span>にすることが出来ます！
                                    </p>
                                    <p>コースのご注文では飲み放題等も付けられますので、ママ会や女子会等にいかがでしょうか？</p>
                                    <p>ご予約随時承っております☆<a
                                                href="assets/display/img/IMG_0120.jpg"
                                                class="fbx-link fbx-instance"><img
                                                    class="alignnone size-thumbnail wp-image-1600"
                                                    src="assets/display/img/IMG_0120-300x400.jpg"
                                                    alt="" width="300" height="400"
                                                    srcset="assets/display/img/IMG_0120-300x400.jpg 300w, assets/display/img/IMG_0120-768x1024.jpg 768w, assets/display/img/IMG_0120-1000x1333.jpg 1000w, assets/display/img/IMG_0120.jpg 1536w"
                                                    sizes="(max-width: 300px) 100vw, 300px"></a></p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-08-25">2017年08月25日(金)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e7%aa%93%e9%9a%9b%e3%81%ae%e3%82%b5%e3%83%9c%e3%81%a1%e3%82%83%e3%82%93/">窓際のサボちゃん</a>
                                </h3>
                                <div class="entry-content">
                                    <p>不安定な天気の次はきっつい残暑(*´Д｀*)</p>
                                    <p>溶けちゃいますよ・・・</p>
                                    <p>そんな暑さの中、窓際のサボちゃんはスクスク育ってきてます！</p>
                                    <p>さすが、メキシコの猛暑を耐え抜くだけあってこれくらいじゃ気にもならない模様（＾ω＾）</p>
                                    <p>頭のてっぺん？から新芽がニョキニョキ生えてきています。</p>
                                    <p>うちで使ってる料理用のさぼてんもこのサボちゃんと同じ種類の平べったい奴なんです。</p>
                                    <p>変わり種のさぼてん料理を是非一度お試しあれ(*´꒳`*)<a
                                                href="assets/display/img/image-1.jpg"
                                                class="fbx-link fbx-instance"><img
                                                    class="alignnone size-thumbnail wp-image-1597"
                                                    src="assets/display/img/image-1-300x225.jpg"
                                                    alt="" width="300" height="225"
                                                    srcset="assets/display/img/image-1-300x225.jpg 300w, assets/display/img/image-1-768x576.jpg 768w, assets/display/img/image-1-1000x750.jpg 1000w"
                                                    sizes="(max-width: 300px) 100vw, 300px"></a></p>
                                    <p>&nbsp;</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-08-22">2017年08月22日(火)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e8%8a%b1%e7%81%ab%e5%a4%a7%e4%bc%9a/">花火大会</a>
                                </h3>
                                <div class="entry-content">
                                    <p>今年はもう皆さん行きましたか？</p>
                                    <p>今日は江ノ島の花火大会だそうですね（＾ω＾）</p>
                                    <p>自分は仕事のために行けていませんが、これから予定がある方には楽しんできてもらいたいです☆</p>
                                    <p>夏休み中の方もそうでない方も、よい火曜日を(*´꒳`*)/♪♪</p>
                                    <p>#南林間#さぼてん#カフェ#アイスコーヒー#まったり#夜も営業してます</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-08-21">2017年08月21日(月)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e4%b9%85%e4%bf%9d%e7%94%b0%ef%bc%88%e8%90%ac%e5%af%bf%ef%bc%89/">久保田（萬寿）</a>
                                </h3>
                                <div class="entry-content">
                                    <p>本日より、純米大吟醸「久保田（萬寿）」入荷致しました！</p>
                                    <p>・・・んですが、無くなり次第終了です(＞人＜;)</p>
                                    <p>1合600円とお手頃価格でのご提供ですので、是非お試し下さいませ！<a
                                                href="assets/display/img/image.jpg"
                                                class="fbx-link fbx-instance"><img
                                                    class="alignnone size-thumbnail wp-image-1579"
                                                    src="assets/display/img/image-300x225.jpg"
                                                    alt="" width="300" height="225"
                                                    srcset="assets/display/img/image-300x225.jpg 300w, assets/display/img/image-768x576.jpg 768w, assets/display/img/image-1000x750.jpg 1000w"
                                                    sizes="(max-width: 300px) 100vw, 300px"></a></p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-08-20">2017年08月20日(日)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e6%98%a8%e6%97%a5%e3%81%ae%e3%82%b2%e3%83%aa%e3%83%a9%e8%b1%aa%e9%9b%a8/">昨日のゲリラ豪雨</a>
                                </h3>
                                <div class="entry-content">
                                    <p>すごかったですね(*´Д｀*)</p>
                                    <p>あのままお店に寝泊まりするのかと心配になるほどでした笑</p>
                                    <p>スッキリしない天気は週明けまで続くらしいので、お出掛けの際は皆さん気をつけて下さいね(^◇^;)</p>
                                    <p>今日もさぼてんcafeは元気に営業中です(^O^)</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-08-19">2017年08月19日(土)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e5%a4%8f%e4%bc%91%e3%81%bf%e7%b5%82%e7%9b%a4%ef%bc%81%ef%bc%81/">夏休み終盤！！</a>
                                </h3>
                                <div class="entry-content">
                                    <p>いいお天気になりましたね（＾ω＾）</p>
                                    <p>さぼてんcafeはおかげさまで元気に営業しております☆</p>
                                    <p>ディナータイムにおいて、</p>
                                    <p>本日土曜日はお会計から10%割引！</p>
                                    <p>明日日曜日は生ビールと生シードル何杯飲んでも1杯100円のサービスデーとなっております(°▽°)♪♪</p>
                                    <p>皆さまお気軽にさぼてんcafeへお立ち寄りください(о´∀`о)/</p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-08-13">2017年08月13日(日)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e7%94%9f%e3%82%b7%e3%83%bc%e3%83%89%e3%83%ab/">生シードル</a>
                                </h3>
                                <div class="entry-content">
                                    <p>当店には、他にはあまり見れない<span
                                                style="font-size: 24px; background-color: #ffffff; color: #ff0000;"><strong>『樽詰生シードル』</strong></span>があります。
                                    </p>
                                    <p>林檎を発酵させて造ったお酒で、フルーティ感とドライ感を一緒に楽しめます！<br>
                                        女性だけでなく男性のファンも続々と獲得中(o^^o)<br>
                                        よく見る瓶のタイプとはまた違った飲みごこちを是非お試し下さい(^-^)</p>
                                    <p>あ、ちなみにいつまでやるかは全く未定ですが、毎週日曜のディナー帯は<span style="font-size: 16px;">「生</span>ビール・生シードル1杯100円キャンペーン」を開催中です。
                                    </p>
                                    <p>お気軽にいらっしゃってくださいね〜（＾ω＾）<a href="assets/display/img/drink_02.png"
                                                                class="fbx-link fbx-instance"><img
                                                    class="alignnone size-thumbnail wp-image-1196"
                                                    src="assets/display/img/drink_02-300x172.png" alt="樽詰生シードル"
                                                    width="300" height="172"
                                                    srcset="assets/display/img/drink_02-300x172.png 300w, assets/display/img/drink_02-768x441.png 768w, assets/display/img/drink_02.png 1000w"
                                                    sizes="(max-width: 300px) 100vw, 300px"></a></p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-08-11">2017年08月11日(金)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e5%88%9d%e3%83%96%e3%83%ad%e3%82%b0%ef%bc%81/">初ブログ！</a>
                                </h3>
                                <div class="entry-content">
                                    <p>「さぼてんcafe」も早いもので3ヶ月が経ちました<span
                                                style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">！</span></p>
                                    <p>常連様も少しずつ増えてきて、益々頑張らなければと気合いを入れ直したところです。</p>
                                    <p>さて、本日よりお盆休みに入られる方が多いかと思いますが、「さぼてんcafe」は通常通りの営業を致します。</p>
                                    <p>街がヒッソリとしててビビってますが、お気軽にお立ち寄り下さい（＾ω＾）<a href="assets/display/img/about_02.png"
                                                                             class="fbx-link fbx-instance"><img
                                                    class="alignnone size-thumbnail wp-image-979"
                                                    src="assets/display/img/about_02-300x214.png" alt="さぼてん"
                                                    width="300" height="214"
                                                    srcset="assets/display/img/about_02-300x214.png 300w, assets/display/img/about_02.png 357w"
                                                    sizes="(max-width: 300px) 100vw, 300px"></a></p>
                                </div>
                            </section>

                            <section>
                                <div class="entry-time">
                                    <time datetime="2017-08-04">2017年08月04日(金)</time>
                                </div>
                                <h3 class="entry-title"><a
                                            href="blog/%e3%81%95%e3%81%bc%e3%81%a6%e3%82%93cafe%e3%81%ae%e3%83%9b%e3%83%bc%e3%83%a0%e3%83%9a%e3%83%bc%e3%82%b8%e3%82%aa%e3%83%bc%e3%83%97%e3%83%b3%e3%81%97%e3%81%be%e3%81%97%e3%81%9f%ef%bc%81%ef%bc%81/">さぼてんcaféのホームページオープンしました！！</a>
                                </h3>
                                <div class="entry-content">
                                    <p>このたび「さぼてんcafé」のホームページがオープンしました<img draggable="false" class="emoji" alt="🎵"
                                    src="https://s.w.org/images/core/emoji/2.3/svg/1f3b5.svg"><br>たまに、ホームページに遊びに来てください！！</p>
                                </div>
                            </section>

                        </div>
                        
                        <div id="mCSB_1_scrollbar_vertical"
                             class="mCSB_scrollTools mCSB_1_scrollbar mCS-dark-2 mCSB_scrollTools_vertical"
                             style="display: block;">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div></main>
@endsection