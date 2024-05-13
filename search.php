<?php get_header(); ?>

	<main class="section section--main" id="primary" >

		<?php if ( have_posts() ) : ?>

			<div class="module--page-header">
				<header class="page-header">
					<h1 class="page-title">
						<?php
							/* translators: %s: search query. */
							printf( esc_html__( 'Search Results for: %s', 'bmnnit' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
				</header>
			</div>

			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
<?php get_sidebar(); ?>
	</main>

<?php
get_footer();
