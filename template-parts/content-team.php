<article id="article post-<?php the_ID(); ?>" <?php post_class($css_class = 'article article--team'); ?>>
	
	<header class="article__header team__header entry-header">
		<?php the_title( '<h2 class="article__title team__title entry-title">', '</h2>' ); ?>
	</header>

	<div class="article__thumbnail team__thumbnail">
		<?php bmnnit_post_thumbnail(); ?>
	</div>

	<div class="article__body team__body entry-content">
		<?php the_content(); ?>
	</div>

	<footer class="article__footer team__footer">
		<?php wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bmnnit' ),
				'after'  => '</div>',
			)
		); ?>
	</footer>
	
</article>


