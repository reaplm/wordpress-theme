<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="header-image">
			<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" 
			width="<?php echo get_custom_header()->width; ?>" alt="" />
		</div>
		<div id="main-menu" class="text-capitalize fixed-top">
			<?php 
			  // Fix menu overlap
			  if ( is_admin_bar_showing() ) echo '<div style="min-height: 30px;"></div>'; 
			?>
			<div class="navbar">
				<div id="main-menu" class="navbar navbar-toggleable-md justify-content-between"
					role="navigation" data-toggle="collapse"
					role="navigation">
					<a class="navbar-brand" href="#post-10">PDM</a>
					<?php wp_nav_menu(
							array(
								'theme_location'=> 	'primary',
								'menu_id'		=>	'navbar-menu-toggle',
								'menu_class'	=>	'navbar-nav collapse',
								'container'		=> 	'ul'
								)); 
					?>
				</div>
				<button type="button" class="navbar-toggler 
						navbar-toggler-right hidden-lg-up" 
						data-toggle="collapse" 
						data-target="#navbar-menu-toggle" 
						aria-controls="navbar-menu-toggle" 
						aria-expanded="false" aria-label="toggle navigation">
						<span class="navbar-toggler-icon">&#9776;</span>
				</button>
			</div>
		</div>
		