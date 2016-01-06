<?php get_header(); ?>

<section id="main">
 <div id="title_label">
      <div class="container">
        <span>Estas en</span>
        <h1><?php single_cat_title( $prefix = '', $display = true ); ?></h1>
      </div>      
    </div>
    <div class="container">
      <section id="articles_list">
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
        <nav>
              <ul class="pagination">
                <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
      </section>


			

<?php get_sidebar(); ?>

</div>
</section>

<?php get_footer(); ?>