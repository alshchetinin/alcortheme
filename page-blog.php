<?php 
/*
Template Name: Шаблон блога
*/

?>

<?php get_header(); ?>
<div class="header-section-page-second">
   <div class="container">
      <div class="row">
         <div class="col-md-10">
            <h1>Полезные матриалы</h1>
         </div>
      </div>
   </div>

</div>
<div class="container">
   <div class="row">
      <?php
					$posts = get_posts( array(
						'numberposts' => -1,			
						'orderby'     => 'date',
						'order'       => 'DESC',
					) );
			foreach( $posts as $post ) : ?>
      <div class="col-md-4">
         <div class="blog-item">
            <a href="<?php the_permalink(); ?>"></a>
            <div class="blog-item__img">
               <?php the_post_thumbnail('full','class=img-responsive') ?>
            </div>
            <div class="blog-item__title">
               <h4><?php the_title(); ?></h4>
            </div>
         </div>

      </div>
      <?php endforeach; ?>
      <?php wp_reset_postdata() ?>
   </div>
</div>
<?php get_footer(); ?>