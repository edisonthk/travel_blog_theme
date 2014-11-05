<!doctype html>
<html <?php language_attributes( $doctype ) ?>>
	<head>
		<meta charset="utf-8">
		<title>僕の旅行ブログ</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/base.css">
		<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/single.css">
	    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); //include style.css ?>">
	    
	    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/jquery-1.11.1.min.js"></script>
	    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/base.js"></script>
	</head>
	<body>
		<?php get_template_part( 'menu' ); ?>
		<header id="navigator" class="clearfix">
			<div class="navigate-panel-left">
				
					<button id="btn-back" class="btn-background" onclick="javascript: history.go(-1)">
					</button>
				
			</div>
			<div class="navigate-panel-right">
				<div class="btn-background">
					<button id="btn-menu" class="lines-button x" onclick="menuToggle(this);" ><span class="lines"></span></button>
				</div>
			</div>
		</header>
		

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
		<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/single.js"></script>
	</body>
</html>