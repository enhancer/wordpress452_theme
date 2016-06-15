<?php 
    /* Ajout d’un emplacement de menu */ 
     
       register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'twentyfifteen' ),
		'social'  => __( 'Social Links Menu', 'twentyfifteen' ),
	) );
     
?>

<?php  
/*Ajout de l’utilisation de la sidebar*/

      register_sidebar( array(
		'name'          => __( 'Widget Area', 'mon thème simpliste' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
 
?>
