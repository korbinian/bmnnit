<?php get_header(); ?>

	<main class="section section--main" id="primary" >

		<section class="error-404 not-found">der>

			<div class="module--page-header">
				<header class="page-header">
					<h1 class="page-title">
						<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bmnnit' ); ?>
					</h1>
				</header>
			</div>

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'bmnnit' ); ?></p>
			</div>
		</section>

	</main>

<?php
get_footer();
