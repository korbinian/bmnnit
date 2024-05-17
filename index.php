<?php get_header(); ?>

	<main class="section section--main" id="primary" >
		<div class="area area--content">
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<div class="module--page-header">
					<header class="page-header">
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
				</div>

				<?php
			endif;

			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
	</main>

<?php get_footer(); ?>
