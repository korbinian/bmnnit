<?php
    $id = get_the_ID();
    $project_url = get_field('project_url',  $id); 
	$project_arbeitstage = get_field('project_arbeitstage',  $id); 
	$project_mitarbeiter = get_field('project_mitarbeiter',  $id); 
?>


<article id="post-<?php the_ID(); ?>" <?php post_class($css_class = 'article article--project'); ?>>
	<header class="project-header">
		<?php the_title( '<h2 class="project-title">', '</h1>' ); ?>
	</header>

	<div class="project-thumbnail">
		<?php the_post_thumbnail(); ?>	
	</div>

	<div class="project-content">

		<h2>Projekt Eckdaten:</h2>
		
		<ul>
			<?php if (!empty($project_url)): ?>
				<li>Projekt Homepage: <a href="<?= $project_url ?>"><?= $project_url ?></a></li>
			<?php endif; ?>
			<?php if (!empty($project_arbeitstage)): ?>
				<li>Projekt Dauer: <?= $project_arbeitstage ?> Tage</li>
			<?php endif; ?>
			<?php if (!empty($project_mitarbeiter)): ?>
				<li>Projekt Mitarbeiter: <?= $project_mitarbeiter ?> Personen</li>
			<?php endif; ?>
		</ul>

		<h2>Projektbeschreibung:</h2>
		
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


