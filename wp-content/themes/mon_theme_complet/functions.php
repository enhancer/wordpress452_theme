<?php 
    /* Ajout d’un emplacement de menu */ 
     
       register_nav_menus( array(
		'primary' => __( 'principal',      'mon thème complet' ),
		'social'  => __( 'secondaire', 'mon thème complet' ),
	) );
     
?>

<?php  
/*Ajout de l’utilisation de la sidebar*/

      register_sidebar( array(
		'name'          => __( 'Emplacement gauche', 'mon thème complet' ),
		'id'            => 'gauche',
		'description'   => __( 'emplacement à gauche', 'mon thème complet' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );


      register_sidebar( array(
		'name'          => __( 'Emplacement droite', 'mon thème complet' ),
		'id'            => 'droite',
		'description'   => __( 'emplacement à droite', 'mon thème complet' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
 
?>
