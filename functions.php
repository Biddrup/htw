<?php
	function a27_theme_support(){
		add_theme_support('title-tag');
		register_nav_menus(array(
			'mother_menu'=>'Mother Menu',
		));
		add_theme_support('post-thumbnails');
	}
	add_action('after_setup_theme', 'a27_theme_support');

	function a27_css_js(){

		wp_enqueue_style('Open+Sans', '//fonts.googleapis.com/css?family=Open+Sans:400,300');
		wp_enqueue_style('PT+Sans','//fonts.googleapis.com/css?family=PT+Sans');
		wp_enqueue_style('Raleway','//fonts.googleapis.com/css?family=Raleway');
		wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.css');
		wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css');
		wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', null, 'v1.0', all);
		wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.min.css', null, 'v1.0', all);
		wp_enqueue_style('style-projects', get_template_directory_uri().'/assets/css/style-projects.css', null, 'v1.0', all);
		wp_enqueue_style('mother-style', get_stylesheet_uri());

		wp_enqueue_script('jquery');
		wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js', 'jquery', 'v1.0', true);
		wp_enqueue_script('wow.min', get_template_directory_uri().'/js/wow.min.js', 'jquery', 'v1.0', true);
	}
	add_action('wp_enqueue_scripts', 'a27_css_js');

	function a27_footer(){ ?>
		<script>
		  new WOW().init();
		</script>
	<?php }
	add_action('wp_footer', 'a27_footer', 21);

	function a27_fallback_menu(){ ?>
		<ul class="nav navbar-nav pull-right">
		    <li class="active">
		        <a href="index.html">Home</a>
		    </li>
		    <li>
		        <a href="about.html">About</a>
		    </li>
		    <li>
		        <a href="blog.html">Blog</a>
		    </li>
		    <li>
		        <a href="team.html">Team</a>
		    </li>
		    <li>
		        <a href="contact.html"><span>Contact</span></a>
		    </li>
		</ul>
	<?php }

	function a27_custom_post(){
		register_post_type('slider', array(
			'labels'=>array(
				'name'=>'Main Slider',
				'menu_name'=>'Slider Menu',
				'all_item'=>'All Sliders',
				'add_new'=>'Add New Slider',
				'add_new_item'=>'Add New Slider item'
			),
			'public'=>true,
			'supports'=>array('title', 'thumbnail', 'revisions', 'page-attributes', 'custom-fields'),
		));
	}
	add_action('init', 'a27_custom_post');