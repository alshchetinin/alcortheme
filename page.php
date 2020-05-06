<?php get_header(); ?>
<div class="header-section-page">
   <div class="header-section-page__overlay"></div>
   <div class="header-section-page__bg" style="background-image: url(<?php the_post_thumbnail_url( 'full' )?>)"></div>
   <div class="container">
      <div class="row">
         <div class="col-md-10">
            <h1><?php the_title() ?></h1>
            <h4><?php the_excerpt()?></h4>
         </div>
      </div>
   </div>

</div>


<div class="container">
   <div class="site-content page">

   </div>
</div>

<div class="container" style="margin-bottom:40px">
   <div class="row">
      <div class="col-md-12">
         <?php the_post(); the_content();?>
      </div>
   </div>
</div>
<?php get_footer(); ?>