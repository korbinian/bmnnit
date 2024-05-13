<?php get_header(); ?>

	<main class="section section--main" id="primary" >

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'bmnnit' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'bmnnit' ) . '</span> <span class="nav-title">%title</span>',
				)
			);


		endwhile;
		?>
<?php get_sidebar(); ?>
	</main>

<?php get_footer(); ?>
