<?php     
require('class-wp-bootstrap-navwalker.php');
/*
** 
** ma premire fonction pour commencer un theme WordPress 
** ajout de style css
*/

function medoxMil_add_styles() { 

  wp_enqueue_style('my-style-1-bots',  get_template_directory_uri().'/css/bootstrap.min.css' );
  wp_enqueue_style('my-style-2-fonAws',  get_template_directory_uri().'/css/fontawesome.min.css' );
wp_enqueue_style('my-style-3-main',get_template_directory_uri().'/css/main.css' );  

}

/** 
* ajout de script js
*
*/
function medoxMil_add_scripts(){

  // suprimer jquery de header et ajouter en footer
  wp_deregister_script('jquery'); //  Supprimer le jquery de WP
  wp_register_script('jquery',includes_url('/js/jquery/jquery.js'),false,'',true);   // ajouter le jquery de WP en footer

wp_enqueue_script('jquery'); // ajouter le jquery de WP en footer

  wp_enqueue_script('my-script-1-bots',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'), false, true  );
  wp_enqueue_script('all-fontawsome',  get_template_directory_uri().'/js/all.min.js',array(), false, true  );
  wp_enqueue_script('my-script-2-my',  get_template_directory_uri().'/js/main.js',array(), false, true  );


  wp_enqueue_script('html5shiv',get_template_directory_uri().'/js/html5shiv.js');
  wp_script_add_data('html5shiv','conditional','lt IE 9');
}

add_action('wp_enqueue_scripts','medoxMil_add_styles');
add_action('wp_enqueue_scripts','medoxMil_add_scripts');


/**
 * 
 * Ajouter Une menue De Navigation boostrap
 */


function medoxMil_regester_menu_nav(){
//register_nav_menu('boostrap-menu',__('Navigation Bar Ferste'));// Pour ajouter une menue de navigation

register_nav_menus(array(
  'boostrap_menu_01'=> 'Navig Menu 01',
  'boostrap_menu_02_footer'=>' Navig Footer',
)) ;// Pour ajouter plusieurs menue de navigation
} 

function medoxMil_bootstrap_menu(){
  
        wp_nav_menu(array(
        'theme_location' => 'boostrap_menu_01',
        'menu_class' => 'nav navbar-nav navbar-right  medox-001',
        'container' => false, // ← IMPORTANT : false pour Bootstrap
        'depth' => 4, // Pour les sous-menus dropdown
        'walker'=> new WP_Bootstrap_Navwalker(),
        'fallback_cb' => function() {
            // Fallback personnalisé pour Bootstrap
            echo '<ul class="nav navbar-nav navbar-right ici-code-med">';
            wp_list_pages(array(
                'title_li' => '',
                'depth' => 2
            ));
            echo '</ul>';
        }
    ));
   
}

add_action('init','medoxMil_regester_menu_nav');// init ou changements




/**
 * (Featured image)
 * Ajouter Image de Poste Avant entre dans post 
 */
add_theme_support('post-thumbnails');



 

/**
 * (Description de POSTs)
 *  the_excerpt 
 */
function medoxMil_excerpt_length($length){ 
return  20 ; //attention rede more dans post edite 
}

add_filter('excerpt_length','medoxMil_excerpt_length');


function  medoxMil_excerpt_more($more){
  return " ****";
}
add_filter('excerpt_more','medoxMil_excerpt_more');





?>