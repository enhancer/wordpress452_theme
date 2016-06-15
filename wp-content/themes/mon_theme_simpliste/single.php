<?php get_header(); ?>

<?php if(have_posts()) : ?> 
   <?php while(have_posts()) : the_post(); ?> 
      <div id="article_seul"> 
         <h2><?php the_title(); ?></h2> 
         <?php the_content(); ?> 
         <p class="metadata">Par : <?php the_author(); ?></p> 
         <p class="metadata">Publié le : <?php the_date(); ?></p> 
      </div> 
   <?php endwhile; ?> 
<?php endif; ?>

<?php the_author(); ?>

<?php the_date(); ?>

<?php get_sidebar(); ?> 
<?php get_footer(); ?>