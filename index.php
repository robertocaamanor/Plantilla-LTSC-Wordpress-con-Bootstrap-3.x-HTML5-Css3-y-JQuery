<?php get_header(); ?>

<section id="main">

    <div id="no-slide">
      <?php include (TEMPLATEPATH. '/slideshow.php'); ?>
  </div>
 
  
    </div>
		
		<div class="container">
      <section id="articles_list">
      <?php query_posts("paged=$paged"); ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      
        <article>
          <div id="thumb"><a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) { the_post_thumbnail( 'list_articles_thumbs'); } ?>
          </a></div>
          <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
          <div class="bajada"><?php the_author(); ?> | <?php the_date(); ?> | <span class="lista-etiquetas"><?php the_category(); ?></span></div>
          <div class="extracto"><?php the_excerpt(); ?></div>
          <a href="<?php the_permalink(); ?>"><button class="btn btn-danger btn-sm" type="Leer mas">Leer mas</button></a>
        </article>        
           
      
      <?php endwhile; else: ?>
      <h1>No se encontraron articulos :(</h1>
      <?php endif; ?>
        <?php
          if ( function_exists('wp_bootstrap_pagination') )
            wp_bootstrap_pagination();
        ?>
      </section>


			

<?php get_sidebar(); ?>

</div>
</section>

<?php get_footer(); ?>