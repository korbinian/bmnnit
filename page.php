<?php get_header(); ?>

	<main class="section section--main" id="primary" >
		<div class="area area--content">
			
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile;
			?>

		</div>

		<aside class="area area--sidebar sidebar">
		<div class="module module--nav-sidebar">
			<nav class="nav-sidebar">
				<?php wp_nav_menu(
					array(
						'theme_location' => 'nav-sidebar',
						'menu_id'        => 'nav-sidebar',
						// 'walker'         => new BMNNIT_Walker(),
					)
				);
				?>
			</nav>
		</div>
		</aside>

		
	</main>

<?php get_footer(); ?>
