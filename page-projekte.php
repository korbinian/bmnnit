<?php get_header(); ?>

<?php
	// Define the initial query arguments for category 'xxx'
	$query_args = array(
		'post_type'      => 'project',
		'posts_per_page' => 10
	);

	$reference_query = new WP_Query($query_args);
?>
	<main class="section section--main" id="primary" >
	
	<div class="area area--content">
	<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
	<?php if ($reference_query->have_posts()) : ?>
			<div class="reference-list">
				<?php while ($reference_query->have_posts()) : $reference_query->the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'project' ); ?>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		<?php else : ?>
			<article class="hentry">
				<div class="entry-content">
					<h2>:'(</h2>
					<p>keine Referenzen gefunden </p>
				</div>
			</article>
			
		<?php endif; ?>
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
