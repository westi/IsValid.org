<?php require_once( dirname( __FILE__ ) . '/isvalid-load.php' ); ?>
<?php print_header( true ); ?>
	<body class="embed">
		<?php Handlebars::print_templates(); ?>

		<div class="container">
			<div class="results"></div>
		</div> <!-- /container -->
	</body>
</html>