<?php
function abb_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails',array('post','sliders', 'subsection', 'guide', 'cards', 'product1', 'product2', 'product3','product4','footer'));

    load_theme_textdomain('abb', get_template_directory_uri().'/languages');

    //menu registration
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu','abb')
    ));

}
add_action('after_setup_theme','abb_setup_theme');

function abb_assets(){
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.1', 'all' );
    wp_enqueue_style( 'Google_poppins', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');
    wp_enqueue_style( 'Font_awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.1', 'all' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.1', 'all' );
    wp_enqueue_style( 'Owl_Carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.1', 'all' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.1', 'all' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.1', 'all' );
    
    //style css
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    //load scripts
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array( 'jquery' ), 1.1, true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), 1.1, true );
    wp_enqueue_script( 'carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), 1.1, true );
    wp_enqueue_script( 'popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), 1.1, true );
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.min.js', array( 'jquery' ), 1.1, true );
    wp_enqueue_script( 'imageloaded', get_template_directory_uri() . '/assets/js/imageloaded.min.js', array( 'jquery' ), 1.1, true );
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array( 'jquery' ), 1.1, true );
    wp_enqueue_script( 'waypoint', get_template_directory_uri() . '/assets/js/waypoint.min.js', array( 'jquery' ), 1.1, true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js"', array( 'jquery' ), 1.1, true );
}

add_action('wp_enqueue_scripts','abb_assets');

//custom post types
function abb_custom_posts(){
    //custom post for Jumbotron-sliders
    register_post_type('sliders', array( 
        'labels'=>array(
                'name'=>__('Jumbotron','abb'),
                'singular_name' =>__('Slides','abb'),
        ),
        'public'=> true,
        'show_ui'=> true,
        'supports'=> array('title','editor','thumbnail','custom-fields'),
        'show_in_rest'=> true
    ));
    

     //custom post for jumbotron-subsection
     register_post_type('subsection', array(  
        'labels'=>array(
                'name'=>__('Subsection','abb'),  
                'singular_name' => __('Subsection','abb'), 
        ),
        'public'=> true,
        'show_ui'=> true,
        'supports'=> array('title','editor','thumbnail','custom-fields'),
        'show_in_rest'=> true
    ));
    

    
    //custom post for teaser guide
    register_post_type('guide', array(  
        'labels'=>array(
                'name'=>__('Guide','abb'), 
                'singular_name' => __('Guide','abb'), 
        ),
        'public'=> true,
        'show_ui'=> true,
        'supports'=> array('title','editor','thumbnail','custom-fields'),
        'show_in_rest'=> true
    ));

    //custom post for cards
    register_post_type('cards', array(
        'labels'=>array(
                'name'=>__('Cards','abb'),
                'singular_name' => __('Card','abb'),
        ),
        'public'=> true,
        'show_ui'=> true,
        'supports'=> array('title','editor', 'thumbnail','custom-fields'),
        'show_in_rest'=> true
    ));

    //custom post for the Product One
    register_post_type('product1', array(
        'labels'=>array(
                'name'=>__('Product One','abb'),
                'singular_name' => __('Product','abb'),
        ),
        'public'=> true,
        'show_ui'=> true,
        'supports'=> array('title','editor', 'thumbnail','custom-fields'),
        'show_in_rest'=> true
    ));

     //custom post for the Product Two
     register_post_type('product2', array(
        'labels'=>array(
                'name'=>__('Product Two','abb'),
                'singular_name' => __('Product','abb'),
        ),
        'public'=> true,
        'show_ui'=> true,
        'supports'=> array('title','editor', 'thumbnail','custom-fields'),
        'show_in_rest'=> true
    ));

     //custom post for the Product Three
     register_post_type('product3', array(
        'labels'=>array(
                'name'=>__('Product Three','abb'),
                'singular_name' => __('Product','abb'),
        ),
        'public'=> true,
        'show_ui'=> true,
        'supports'=> array('title','editor', 'thumbnail','custom-fields'),
        'show_in_rest'=> true
    ));

     //custom post for the Product Four
     register_post_type('product4', array(
        'labels'=>array(
                'name'=>__('Product Four','abb'),
                'singular_name' => __('Product','abb'),
        ),
        'public'=> true,
        'show_ui'=> true,
        'supports'=> array('title','editor', 'thumbnail','custom-fields'),
        'show_in_rest'=> true
    ));

    //custom post for the footer
    register_post_type('footer', array(
        'labels'=>array(
                'name'=>__('Footer Fields','abb'),
                'singular_name' => __('Footer','abb'),
        ),
        'public'=> true,
        'show_ui'=> true,
        'supports'=> array('title', 'custom-fields')
        
    ));


}
add_action('init','abb_custom_posts');

//Walker for creating dropdown sub-menus

class WPDocs_Walker_Nav_Menu extends Walker_Nav_Menu {

	
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		// Depth-dependent classes.
		$indent = str_repeat( "\t", $depth ); // code indent
		$submen = ($depth > 0) ? 'sub-menu' : '';
		

		// Build HTML for output.
		$output .= "\n$indent<ul class=\"dropdown-menu$submen depth-$depth\">\n";
	}

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '' ; // code indent

        $li_atributes ='';
        $class_names=$values = '';

        $classes[] = empty($item->classes) ? array() : (array) $item->classes;

        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
        $classes[] = 'menu-item' .$item->ID;

        if($depth && $args->walker->has_children) {
            $classes[] = 'dropdown-submen';
        }

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = 'class ="' .esc_attr($class_names) .'"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' .$item->ID, $item, $args);
        $id = 'id="' .esc_attr($id) .'"';

        $output .=$indent .'<li ' .$id .$values .$class_names .$li_atributes .'>';

        $attributes = !empty($item->$attr_title) ? 'title ="' .$item->atr_title.'"' : '';
        $attributes = !empty($item->$target) ? 'target ="' .$item->target.'"' : '';
        $attributes = !empty($item->xfn) ? 'rel ="' .$item->xfn.'"' : '';
        $attributes = !empty($item->url) ? ' href="'   . esc_attr( $item->url) .'"' : '';
        $attributes .= ($args->walker->has_children) ? 'class="dropdown-toggle" data-toggle="dropdown"' : '';

        $menuitems = $args->before;
        $menuitems .= '<a' .$attributes .'>';
        //print_r($menuitems);
        //var_dump($attributes);
        $menuitems .= $args->before_link .apply_filters('the_title', $item->title, $item->ID) .$args->after_link;
        $menuitems .= ($depth ==0 && $args->walker->has_children) ? '<span class="caret text-danger"><i class="fa fa-angle-down"></i></span></a>' : '</a>';
        $menuitems .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $menuitems, $item, $depth, $args);
		
	}
}
?>


    
      
    
 
     