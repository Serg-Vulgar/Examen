<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title><?php echo get_bloginfo('name'); ?> / <?php echo get_bloginfo('description'); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
	<?php wp_head(); ?>
</head>

<body>

	<div class="container">
		<div class="header">
			<div class="top-header">
				<div class="logo">
					<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/Logo.png"></a></h1>
				</div>
				<div class="nav">
					<ul>
						<?php wp_nav_menu(); ?>
					</ul>
				</div>
			</div>

			<div class="bottom-header">
				<h2><?php bloginfo('name'); ?></h2>
			</div>
		</div>