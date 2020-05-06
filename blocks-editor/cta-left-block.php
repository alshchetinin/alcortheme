
<?php

$title = get_field( 'title' );
$text = get_field('text');
$nameButton = get_field('nameButton');
$linkButton = get_field('linkButton');
?>

<div class="cta-left-block">

   <div class="cta-left-block__title">
      <?php echo $title?>
   </div>
   
   <div class="cta-left-block__text">
   <?php echo $text?>
   </div>
   
   <div class="cta-left-block__button">
   <a href="<?php echo $linkButton?>" class="button"><?php echo $nameButton?></a>
   
   </div>
   
</div>