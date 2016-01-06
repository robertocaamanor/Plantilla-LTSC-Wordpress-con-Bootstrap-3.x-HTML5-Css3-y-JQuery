<div id="myCarousel" class="carousel slide">
 <div class="carousel-inner">
  <?php 
   $the_query = new WP_Query(array(
    'category_name' => 'Home Slider', 
    'posts_per_page' => 1 
    )); 
   while ( $the_query->have_posts() ) : 
   $the_query->the_post();
  ?>
   <div class="item active">
    <?php the_post_thumbnail('large');?>
    <div class="carousel-caption">
     <h4><?php the_title();?></h4>
     <p><?php the_excerpt();?></p>
     <a href="<?php the_permalink(); ?>"><button class="btn btn-danger btn-sm" type="Leer mas">Leer mas</button></a>
    </div>
   </div><!-- item active -->
  <?php 
   endwhile; 
   wp_reset_postdata();
  ?>
  <?php 
   $the_query = new WP_Query(array(
    'category_name' => 'Home Slider', 
    'posts_per_page' => 5, 
    'offset' => 1 
    )); 
   while ( $the_query->have_posts() ) : 
   $the_query->the_post();
  ?>
   <div class="item">
    <?php the_post_thumbnail('large');?>
    <div class="carousel-caption">
     <h4><?php the_title();?></h4>
     <p><?php the_excerpt();?></p>
     <a href="<?php the_permalink(); ?>"><button class="btn btn-danger btn-sm" type="Leer mas">Leer mas</button></a>
    </div>
   </div><!-- item -->
  <?php 
   endwhile; 
   wp_reset_postdata();
  ?>
 </div><!-- carousel-inner -->
<!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div><!-- #myCarousel -->