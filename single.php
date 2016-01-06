<?php get_header(); ?>

<section id="main">		
  <div class="container">
  <section id="articles_single" class="posts col-md-9">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
      <?php if (has_post_thumbnail()) { the_post_thumbnail( 'single_thumbs'); } ?>
      <div class="title_single"><h1><?php the_title(); ?></h1>
      <div class="bajada_single"><?php the_author(); ?> | <?php the_date(); ?> | <span class="lista-etiquetas"><?php the_category(); ?></span></div></div>
      <p><?php the_content(); ?></p>
      <div class="tags">Tags: <p><?php the_tags(); ?></p></div>
    </article>
    <?php endwhile; else: ?>
      <h1>No se encontraron articulos :(</h1>
      <?php endif; ?>
  </section>


			

<?php get_sidebar(); ?>

</div>
</section>

<?php get_footer(); ?>