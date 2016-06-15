<!DOCTYPE html> 
<html <?php language_attributes() ?>> 
<head> 
 
   <title><?php bloginfo('name') ; ?> |  
   <?php bloginfo('description') ; ?></title> 
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   
   <link rel="profile" href="http://gmpg.org/xfn/11">
   <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

   <title> 
    <?php bloginfo('name'); ?> 
    <?php if(is_home() || is_front_page()) : ?> 
             &mdash; <?php bloginfo('description'); ?> 
             <?php else : ?> 
             &mdash; <?php wp_title("",true); ?> 
    <?php endif; ?> 
</title> 

   <link href="..\kube500\css\kube.min.css"  rel="stylesheet" /> 
   <link href="<?php bloginfo( 'stylesheet_url') ; ?>"  rel="stylesheet" /> 
   <?php wp_head() ; ?> 
</head> 
<body <?php body_class(); ?>>

<!-- Ouverture de la boîte #en-tête --> 
<div id="en-tete" class="units-row"> 

<!-- Menu "principal" actif --> 
<?php if ( has_nav_menu( ’principal’ ) ) : ?> 
    <nav id="principal" class="unit-100"> 
         <?php wp_nav_menu( array(’theme_location’=>’principal’)); ?> 
    </nav> 
<?php endif; ?>

</div> <!-- Fermeture de la boîte #en-tete -->


