<?php get_header(); ?>

	<main class="section section--main" id="primary" >
		<div class="area area--content">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'front' );

			endwhile;
			?>

		</div>

	</main>

<?php get_footer(); ?>
