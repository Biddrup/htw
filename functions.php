<?php
	function am66_theme_support(){
		add_theme_support('title-tag');
		register_nav_menus(array(
			'primary_menu' => 'Primery Menu',
		));
	}
	add_action('after_setup_theme', 'am66_theme_support');

	function am66_css_js(){
		wp_enqueue_style('google-font-opensans', '//fonts.googleapis.com/css?family=Open+Sans:400,300');
		wp_enqueue_style('google-font-ptsans', '//fonts.googleapis.com/css?family=PT+Sans');
		wp_enqueue_style('google-font-raleway', '//fonts.googleapis.com/css?family=Raleway');
		wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.css', null);
		wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', null);
		wp_enqueue_style('style.css', get_template_directory_uri().'/assets/css/style.css', null, 'v1.0', all);
		wp_enqueue_style('animate.min', get_template_directory_uri().'/assets/css/animate.min.css', null);
		wp_enqueue_style('style-projects', get_template_directory_uri().'/assets/css/style-projects.css', null, 'v1.0', all);
		wp_enqueue_style('mother-style', get_stylesheet_uri());

		wp_enqueue_script('jquery');
		wp_enqueue_script('bootstrap.min.js', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js', 'jquery', 'v3.0', true);
		wp_enqueue_script('wow.min.js', get_template_directory_uri().'/js/wow.min.js', 'jquery', 'v3.0', true);
	}
	add_action('wp_enqueue_scripts', 'am66_css_js');

	function footer_extra_script(){ ?>
		<script>
		  new WOW().init();
		</script>
	<?php }
	add_action('wp_footer', 'footer_extra_script', 21);

	function am66_fallback_menu(){ ?>
		<ul class="nav navbar-nav pull-right">
            <li class="active">
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Blog</a>
            </li>
            <li>
                <a href="#">Team</a>
            </li>
            <li>
                <a href="#"><span>Contact</span></a>
            </li>
        </ul>	
	<?php	}