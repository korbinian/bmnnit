<article id="post-<?php the_ID(); ?>" <?php post_class($css_class = 'article article--front'); ?>>

	<?php bmnnit_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bmnnit' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>

	
</article>
