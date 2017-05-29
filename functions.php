<?php
	//The begenning of theme support area
	function htw_theme_support(){
		add_theme_support('title-tag');
	}
	add_action('after_setup_theme','htw_theme_support');

	//The begenning of script and style
	function htw_scripts(){
		wp_enqueue_style('google-fonts-one', '//fonts.googleapis.com/css?family=Open+Sans:400,300', null, 'v1.0', all);
		wp_enqueue_style('google-fonts-two', '//fonts.googleapis.com/css?family=PT+Sans', null, 'v1.0', all);
		wp_enqueue_style('google-fonts-three', '//fonts.googleapis.com/css?family=Raleway', null, 'v1.0', all);
		wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.css');
		wp_enqueue_style('font-awesome.min', get_template_directory_uri().'/assets/css/font-awesome.min.css');
		wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css');
		wp_enqueue_style('animate.min', get_template_directory_uri().'/assets/css/animate.min.css');
		wp_enqueue_style('main-css', get_stylesheet_uri(), null, 'v1.0', all);

		wp_enqueue_script('jquery');
		wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js', 'jquery', null, true);
		wp_enqueue_script('wow', get_template_directory_uri().'/js/wow.min.js', 'jquery', null, true);
	}
	add_action('wp_enqueue_scripts','htw_scripts');

	function footer_extra_script(){
		?>
		<script>
		  new WOW().init();
		</script>
<?php	}
	add_action('wp_footer', 'footer_extra_script');
