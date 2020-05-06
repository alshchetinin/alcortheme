<?php 
/*
Template Name: Шаблон Отзывы
*/

?>

<?php get_header(); ?>
<div class="header-section-page-second">
   <div class="container">
      <div class="row">
         <div class="col-md-10">
            <h1>Отзывы</h1>
         </div>
      </div>
   </div>

</div>
<div class="container">
   <div class="row">

      <?php while( have_rows('testimonial', 'testimonial') ): the_row(); 

				// переменные
				$name = get_sub_field('name');
				$text = get_sub_field('text');
				$loan = get_sub_field('loan');
				$picture = get_sub_field('picture');
				$vk = get_sub_field('vk');
				$insta = get_sub_field('insta');
				$fb = get_sub_field('fb');
				$ok = get_sub_field('ok');
				?>
      <div class="col-md-6">
         <div class="testimonial-item">
            <div class="testimonial-item__picture">
               <img src="<?php echo $picture?>" alt="" class="img-responsive">
            </div>

            <div class="testimonial-item__text">
               <?php echo $text?>
            </div>
            <div class="testimonial-item__name"><?php echo $name?></div>
            <div class="testimonial-item__loan"><?php echo $loan?></div>
            <div class="testimonial-item__social">
               <?php if( $vk ): ?>
               <a href="<?php echo $vk ?>" class="" target="_blanck">
                  <img src="<?php echo get_template_directory_uri()?>/img/svg/vk.svg" alt="" width="24px">
               </a>
               <?php endif; ?>
               <?php if( $insta ): ?>
               <a href="<?php echo $insta ?>" class="" target="_blanck">
                  <img src="<?php echo get_template_directory_uri()?>/img/svg/insta.svg" alt="" width="24px">
               </a>
               <?php endif; ?>
               <?php if( $ok ): ?>
               <a href="<?php echo $ok ?>" class="" target="_blanck">
                  <img src="<?php echo get_template_directory_uri()?>/img/svg/ok.svg" alt="" width="24px">
               </a>
               <?php endif; ?>

               <?php if( $fb ): ?>
               <a href="<?php echo $fb ?>" class="" target="_blanck">
                  <img src="<?php echo get_template_directory_uri()?>/img/svg/fb.svg" alt="" width="24px">
               </a>
               <?php endif; ?>

            </div>



         </div>
      </div>

      <?php endwhile; ?>


   </div>
</div>
<?php get_footer(); ?>