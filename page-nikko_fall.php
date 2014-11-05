<?php
/*
Template Name: 秋の日光
*/

?>
<!doctype html>
<html <?php language_attributes( $doctype ) ?>>
	<head>
		<meta charset="utf-8">
		<title>僕の旅行ブログ</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/base.css">
	    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/nikko-fall.css">
	    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); //include style.css ?>">

	    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/jquery-1.11.1.min.js"></script>
	    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/base.js"></script>

	</head>
	<body>

		<?php get_template_part( 'menu' ); ?>

		<header>
			<div class="topbar">
				<a href="/"><img class="icon" src="<?= get_template_directory_uri() ?>/images/icon@white.png"></a>
				<button class="lines-button x" onclick="toggleMenu();"><span class="lines"></span></button>
			</div>
			<div id="header_title">
				<h1>紅葉狩り@日光</h1>
				<h4>普通の大学生が書いた紅葉狩りの日記</h4>
			</div>
		</header>
		<div id="header_datetime">
			<div class="container">
				<div class="row">
					<div class="meta">
						<p>2014年11月4日（快晴）&nbsp;<img class="inline" src="<?= get_template_directory_uri() ?>/images/sunny-day.png"></p>
					</div>
				</div>
			</div>
		</div>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<img src="<?= get_template_directory_uri() ?>/images/nikko-fall/1.jpg">
					</div>
					<div class="col-md-5">
						<p>東北高速道路で日光へ向かう途中。</p>
						<p>野田から出発して１時間半経過したところ、周りの景色がすっかり紅葉の景色に変わりました。</p>
						<p>日光までは後もう少し！</p>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-7 right-on-desktop">
						<img src="<?= get_template_directory_uri() ?>/images/nikko-fall/1_1.jpg">
					</div>
					<div class="col-md-5 left-on-desktop">
						<p>日光へ着きました！そして、最初の目的地は</p>
						<p class="quote align-middle">華厳の滝</p>
						<p>になります。高速道路で見かけた景色と裏腹、木が全部枯れました(T.T)。でも、紅葉は見れなかったのですが、華厳の滝の絶景で満喫しました。</p>
						<p>一時間半ぐらい滞在したら、次の場所へ目指します！次こそ紅葉は見えるように</p>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<img src="<?= get_template_directory_uri() ?>/images/nikko-fall/2.jpg">
					</div>
					<div class="col-md-5">
						<p>次の場所は</p>
						<p style="text-align:center;" class="quote">霜降りの滝</p>
						<p>になります。華厳の滝から車を１時間ぐらい運転したら霜降りの滝に着きました。</p>
						<p>ここはすっかり紅葉のシーズンになりました、華厳の滝から車で１時間離れたところとは思えないぐらいの景色でした。</p>
					</div>
					
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-7 right-on-desktop">
						<img class="icon_offset icon_offset_1" src="<?= get_template_directory_uri() ?>/images/nikko-fall/3_1.jpg">
						<img class="icon_offset icon_offset_2" src="<?= get_template_directory_uri() ?>/images/nikko-fall/3_2.jpg">
					</div>
					<div class="col-md-5 left-on-desktop">
						<p class="quote align-middle">紅葉狩り＠霧降の滝</p>
					</div>
				</div>
			</div>
		</section>
		<section class="empty-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p>最終の目的に向かう途中に、鬼怒川温泉街を通過しましたが、鬼怒川道路から鬼怒川温泉の町を眺める景色はすごかったです。ですが、移動中のカメラはなかなかピンが合わないから残念ながらここは写真なしです。</p>
						<h3 class="align-middle">(´Ａ｀。)グスン</h3>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-7 left-on-desktop">
						<img src="<?= get_template_directory_uri() ?>/images/nikko-fall/4_1.jpg">
					</div>
					<div class="col-md-5 right-on-desktop">
						<p>日がだいぶ暮れたので、急いで最後の目的地に向かいました。それは</p>
						<p class="align-middle quote">もみじライン</p>
						<p>です。霧降の滝から２時間を運転して着きました。もみじラインは有料道路なんですが、まるで一般的な山道のようだ...</p>
						<p>と思いきや、真赤の紅葉が目の前に現れました！</p>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<img class="icon_offset icon_offset_3" src="<?= get_template_directory_uri() ?>/images/nikko-fall/4.jpg">
						<img class="icon_offset icon_offset_4" src="<?= get_template_directory_uri() ?>/images/nikko-fall/5.jpg">
					</div>
					<div class="col-md-5">
						<p>日暮れの日差しと紅葉が融合した写真</p>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<img src="<?= get_template_directory_uri() ?>/images/nikko-fall/6.jpg">
					</div>
					<div class="col-md-5">
						<p>もみじラインに車が泊まれる場所は複数があったので、そこで車を泊まって山の景色を眺めたり、紅葉の写真を撮ったりしました。</p>
						<p>これで、今回の紅葉狩りは赤い紅葉に包まれながら終止符を打ちました。</p>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<p class="icon-aki">秋の日光</p>
					</div>
					<div class="col-md-6">
						<a class="icon-profile" onclick="toggleMenu();" href="#">作者について</a>
						<a class="icon-work" onclick="toggleMenu();" href="#">他の仕事について</a>
					</div>
				</div>
			</div>
		</footer>
		<script type="text/javascript">
		var _menu = $(".lines");
		$(window).scroll(function() {
	        var h1 = document.getElementsByTagName("header")[0];
	        if(h1.getBoundingClientRect().bottom <= 0){
	        	_menu.addClass("dark");
	        }else{
	        	_menu.removeClass("dark");	
	        }
	        
	    });
		</script>
	</body>
</html>