
<?php

$title = get_field( 'title' );
$text = get_field('text');
$policy = get_field('policy');
?>

<div class="form-page">
   <div class="form-page__title">
      <h3><?php echo $title?></h3>
      <small><?php echo $text?></small>
   </div>
   <?php echo do_shortcode('[contact-form-7 id="53" title="Форма на главной"]')?>
   <div class="form-page__policy">
      <small class="policy"><?php echo $policy?></small>
   </div>
   
</div>