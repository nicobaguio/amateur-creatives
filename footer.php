	<div class="row pre-footer">
		<div class="col-sm-1 col-lg-2"></div>
		<div class="col-sm-10 col-lg-8">
			<nav class="navbar navbar-expand-md">
				<p class="navbar-brand d-block d-md-none">Go to...</p>
				<button class="navbar-toggler align-center" type="button" data-toggle="collapse" data-target="#navlinks" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-chevron-circle-down"></i>
				</button>
					<?php wp_nav_menu( array(
						'menu' => 'secondary-menu',
						'menu_class' => 'navbar-nav pre-footer-nav',
						'container' => 'div',
						'container_class' => 'collapse navbar-collapse',
						'container_id' => 'navlinks',
						'fallback_cb' => false,
					) ); ?>
			</nav>
			<?php dynamic_sidebar( 'pre-footer'); ?>
		</div>
		<div class="col-sm-1 col-lg-2"></div>
	</div>
	<footer class="row final-footer">
		<p class="text-center m-auto">&copy; Amateur Creatives <?php echo date('Y'); ?>.<br>Designed by Crafted by Pam. Developed by Nico Baguio.</p>
	</footer>	
</div>
<?php wp_footer(); ?>
</body>
</html>