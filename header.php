<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header class="section section--header">
		<div class="module module--branding">
			<div class="branding">
				<h1 class="branding__title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">bmnn<b>IT</b><span>|</span></a></h1>

			</div>
		</div>
		<div class="module module--nav-main">
			<button class="nav-main__toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'cavok' ); ?></button>
			<nav class="nav-main" hidden>
				<?php wp_nav_menu(
					array(
						'theme_location' => 'nav-main',
						'menu_id'        => 'nav-main',
					)
				);
				?>
			</nav>
		</div>
		<div class="module module--widgets-topbar">
			<div class="widgets-topbar">
				<?php dynamic_sidebar( 'widgets-topbar' ); ?>
			</div>
		</div>
		<div class="module module--widgets-topright">
			<div class="widgets-topright">
				<?php dynamic_sidebar( 'widgets-topright' ); ?>
			</div>
		</div>
	</header>


