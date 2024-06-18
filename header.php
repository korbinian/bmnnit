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


		<?php if ( is_front_page() ) { ?>
		<div class="module module--branding animated">
			<div class="branding">
				<h1 class="branding__title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">~/<b id="element"></b></a>
				</h1>
					<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
					<script>
						var typed = new Typed('#element', {  
						strings: ['bmnn<b>IT</b>'],
						typeSpeed: 20,
						shuffle: false,
						loop: false,
						backDelay: 2000,
						showCursor: true,
						cursorChar: '&#9616;',
						});
					</script>

				<div class="branding__tagline">Johannes Baumann IT-Dienstleistungen</div>
			</div>
		</div>
		<?php } else { ?>
			<div class="module module--branding">
			<div class="branding">
				<h1 class="branding__title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">~/<b>bmnn<b>IT</b></b></a>
				</h1>
				<div class="branding__tagline">Johannes Baumann IT-Dienstleistungen</div>
			</div>
		</div>
    	<?php } ?>
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


