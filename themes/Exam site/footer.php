	<div class="container">
		<div class="pre-footer">
			<ul>
				<li class="about-us">
					<h3>About us</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio repellat, eveniet quidem alias veniam modi ipsa nihil est autem repudiandae.</p>
					<a href="#" class="button">Learn more</a>
					<div class="photos">
						<h3>Photo stream</h3>
						<a href=""></a>
						<a href=""></a>
						<a href=""></a>
						<a href=""></a>
						<a href=""></a>
						<a href=""></a>
					</div>
				</li>

			</ul>
		</div>
	</div>

	<div class="container">
		<div class="footer">
			<span class="copyright">Copyright <?php echo date('Y'); ?> - <?php bloginfo('name'); ?> - All Rights Reserved</span>
				<ul class="footer-nav">
					<?php wp_nav_menu(); ?>
				</ul>
	</div>


	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.3.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
	<?php wp_footer(); ?>
</body>
</html>