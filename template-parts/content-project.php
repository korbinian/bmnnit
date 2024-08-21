<?php
    $id = get_the_ID();
    $project_url = get_field('project_url',  $id); 
	$project_arbeitstage = get_field('project_arbeitstage',  $id); 
	$project_mitarbeiter = get_field('project_mitarbeiter',  $id); 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($css_class = 'article article--project'); ?>>

	<header class="article__header project__header ">
		<?php the_title( '<h2 class="project-title">', '</h2>' ); ?>
		<?php if (!empty($project_url)): ?>
			<div class="project__url">
				<a href="<?= $project_url ?>"><?= $project_url ?></a>
			</div>
			<?php endif; ?>
	</header>

	<div class="article__thumbnail project__thumbnail">
		<?php the_post_thumbnail(); ?>	
	</div>

	<div class="article__body project__body">

		<div class="project__info">
			<!-- 
			<h3>Eckdaten:</h3>
			<?php if (!empty($project_url)): ?>
			<div class="project__url">
				<h4>Homepage:</h4> <a href="<?= $project_url ?>"><?= $project_url ?></a>
			</div>

			<?php endif; ?>
			
			<?php if (!empty($project_arbeitstage)): ?>
				<div class="project__dauer">
					<h3>Umfang:</h3> <span><?= $project_arbeitstage ?> Tage</span>
				</div>
			<?php endif; ?>
			<div class="project__mitarbeiter">
			<?php if (!empty($project_mitarbeiter)): ?>
				<h4>Mitarbeiter:</h4> <span><?= $project_mitarbeiter ?> Personen</li></span>
			<?php endif; ?> -->

		</div>

		<div class="project__content">
			<h3>Projektbeschreibung:</h3>
			<?php the_content(); ?>
		</div>

		<footer class="article__footer project__footer">
			<?php 
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bmnnit' ),
						'after'  => '</div>',
					)
				); 
			?>
		</footer>

	</div>

</article>


