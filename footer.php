
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
	<div class="module module--contactbar">
		<div class="contactbar">
			<address>
				<b>Johannes Baumann IT-Dienstleistungen</b>
				<span class="has-icon has-icon--location">Marktplatz 8 83530 Schnaitsee</span>
				<span class="has-icon has-icon--phone"><a href="tel:+4980715272504">+49 8071 5272504</a></span>
			</address>
		</div>
	</div>

</footer>
<?php wp_footer(); ?>

</body>
</html>
