<?php get_header(); ?>

<?php
	// Define the initial query arguments for category 'xxx'
	$query_args = array(
		'post_type'      => 'team',
		'posts_per_page' => 10
	);

	$reference_query = new WP_Query($query_args);
?>
	<main class="section section--main" id="primary" >
	
		<div class="area area--content">

			<article class="article">
				<header class="article__header entry-header">
					<h2 class="article__title page-title"><?php the_title(); ?></h2>
				</header>
			</article>

			<div class="articles team-members">
				<?php if ($reference_query->have_posts()) : ?>
					<?php while ($reference_query->have_posts()) : $reference_query->the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'team' ); ?>
					<?php endwhile; wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>

		</div>

	</main>

<?php get_footer(); ?>