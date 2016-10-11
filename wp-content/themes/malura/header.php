<!doctype html>
<html>
<head>
	<?php $home = get_template_directory_uri(); ?>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?= $home ?>/assets/css/reset.css">
	<link rel="stylesheet" href="<?= $home; ?>/style.css">


	<?php	wp_head(); ?>
	<title>
		<?php bloginfo('title'); ?>
		<?php echo ' | '; ?>
		<?php the_title(); ?>
	</title>
</head>
<body>

<header>
	<div class="container">
		<?php
			$args = array(
						'theme_lacation' => 'header-menu'
					);
			wp_nav_menu($args);
		?>
	</div>
</header>