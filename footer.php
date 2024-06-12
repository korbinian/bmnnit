
<footer class="section section--footer">
	<div class="module module--widgets">
		<ul class="widgets">
			<?php dynamic_sidebar( 'widgets-footer' ); ?>
		</ul>
	</div>
	<div class="module module--nav-footer">
		<nav class="nav-footer">
			<?php wp_nav_menu(
				array(
					'theme_location' => 'nav-footer',
					'menu_id'        => 'nav-footer',
				)
			);
			?>
		</nav>
	</div>
	<div class="module module--meta">
		<div class="meta">
		Baumann IT-Dienstleistungen / Johannes Baumann / Wasserburgerstr. 2 / 83530 Schnaitsee / +49 8071 5272504 
		</div>
	</div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
