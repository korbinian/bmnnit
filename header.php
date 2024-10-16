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
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="branding__link">
					<h1 class="branding__title">
						~/<span id="element"></span>
					</h1>
						<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
						<script>
							var typed = new Typed('#element', {  
							strings: ['bmnnIT'],
							typeSpeed: 20,
							shuffle: false,
							loop: false,
							backDelay: 2000,
							showCursor: true,
							cursorChar: '&#9616;',
							});
						</script>

					<div class="branding__tagline">Baumann IT-Dienstleistungen</div>
				</a>
			</div>
		</div>
		<?php } else { ?>
		<div class="module module--branding">
			<div class="branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<h1 class="branding__title">
						~/<span>bmnnIT</span></b>
					</h1>
					<div class="branding__tagline">Baumann IT-Dienstleistungen</div>
				</a>
			</div>
		</div>
    	<?php } ?>
		<div class="module module--nav-main">
			<button class="nav-main__toggle nav-hamburger__toggle hamburger" aria-controls="primary-menu" aria-expanded="false">
				<span class="toggle__text hamburger__text"><?php esc_html_e( 'Menü', 'bmnnit' ); ?></span>
				<span class="toggle__box hamburger__box"><span class="toggle__inner hamburger__inner"></span></span>
			</button>

</button>
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


