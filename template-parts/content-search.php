<article id="post-<?php the_ID(); ?>" <?php post_class($css_class = 'article article--search'); ?>>
	<header class="article__header entry-header">
		<?php the_title( sprintf( '<h2 class="article__title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="article__meta entry-meta">
			<?php
			bmnnit_posted_on();
			bmnnit_posted_by();
			?>
		</div>
		<?php endif; ?>
	</header>

	<div class="article__summary entry-summary">
		<?php the_excerpt(); ?>
	</div>

	<footer class="article__footer entry-footer">
		<?php bmnnit_entry_footer(); ?>
	</footer>
</article>
