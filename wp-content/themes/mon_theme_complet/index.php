<?php get_header(); ?> <!-- appel à l'en-tête --> 
   <main> 
      <?php if(have_posts()) : ?> 
         <?php while(have_posts()) : the_post(); ?> 
            <article> 
               <header class = "titre_article"> 
                  <h2><a href="<?php the_permalink(); ?>"> 
                     <?php the_title(); ?></a></h2> 
               </header> 
               <?php the_content(); ?> 
            </article> 
         <?php endwhile; ?> 
      <?php endif; ?> 
   </main> 
<?php get_sidebar(); ?> <!-- appel à la colonne latérale --> 
<?php get_footer(); ?> <!-- appel au pied de page -->