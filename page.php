<?php get_header(); ?>

	<main class="section section--main" id="primary" >

		
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile;
		?>

		<?php get_sidebar(); ?>
		
	</main>

<?php get_footer(); ?>
