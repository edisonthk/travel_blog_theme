<?php
/*
Template Name: Germany and Vienna
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
	    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); //include style.css ?>">

	    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/jquery-1.11.1.min.js"></script>
	    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&amp;sensor=false&amp;libraries=places,geometry"></script>
	    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/base.js"></script>

	</head>
	<body>
		<div class="front">

			<?php get_template_part( 'menu' ); ?>
			<header>
				<div class="topbar">
					<a href="/"><img class="icon" src="<?= get_template_directory_uri() ?>/images/icon.png"></a>
					<button class="lines-button x" onclick="toggleMenu();"><span class="lines"></span></button>
				</div>
				<div class="inline-block">
					<h1 class="title">ベルリン - ミュンヘン - ウィーン</h1>
					<h4 class="sub-title">7日間の旅行</h4>
				</div>
			</header>
			<section id="articles" class="clearfix">

				<?php 

				$args = array(
						'category_name' => 'germany-and-vienna',
					);
				$posts = new WP_Query($args);
				if ($posts->have_posts()):
					while ($posts->have_posts()) : $posts->the_post(); /* loop posts if have posts */ ?>

					
					<article>
						<a class="article-permalink" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php if ( has_post_thumbnail()): ?>
								<div class="inner">
									<?php the_post_thumbnail( 'medium' ); ?>
								</div>
							<?php endif; ?>
							<div class="article-meta">
								
									<h2><?php the_title(); ?><br/>
										<span class="datetime"><?php the_time(get_option('date_format')); ?></span>
									</h2>
								
							</div>
						</a>
					</article>
					
				<?php endwhile; else: // if not post ?>
					
				<?php endif; ?>

				<article id="profile">
					<div class="article-meta">
						<h2>
							<a href="#"><img class="left-side" src="<?= get_template_directory_uri() ?>/images/icon_profile.png">&nbsp;プロファイル</a><br />
							<a href="#" onclick="toggleMenu();">その他の工作<img class="right-side" src="<?= get_template_directory_uri() ?>/images/icon_work.png"></a><br />
						</h2>
					</div>
				</article>

			</section>
		</div>
	</body>
</html>