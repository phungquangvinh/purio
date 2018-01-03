smoothScroll.init({
	// スムーススクロールが適用される属性値。
	selector: '[data-scroll]', 
	// 上部固定ナビとして処理される属性値。固定ナビをこれつけないと不具合が起きる。
	selectorHeader: '[data-scroll-header]',
	// スクロールスピード
	speed: 800,
	// スクロールのアニメーション
	easing: 'easeInOutQuad',
	// スクロールしたときのオフセット
	offset: 0,
	// ページ内移動したときにURLを変更するか
	updateURL: true,
	// コールバック関数
	callback: function ( anchor, toggle ) {}
});




$(function() {
	var showFlug = false;
	var topBtn = $('#page-top');	
	topBtn.css('bottom', '-150px');
	var showFlug = false;
	$(window).scroll(function () {
		if ($(this).scrollTop() > 5) {
			if (showFlug == false) {
				showFlug = true;
				topBtn.stop().animate({'bottom' : '10px'}, 200); 
			}
		} else {
			if (showFlug) {
				showFlug = false;
				topBtn.stop().animate({'bottom' : '-150px'}, 200); 
			}
		}
	});
});
