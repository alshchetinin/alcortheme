
<?php

$title = get_field( 'title' );
$icon = get_field('icon');
$text = get_field('text')
?>

<div class="tick-list">
   <div class="tick-list__icon"><img src="<?php echo $icon?>" alt="" width="28px"></div>
   <div class="tick-list__content">
      <div class="tick-list__title">
         <?php echo $title?>
      </div>
      <div class="tick-list__text">
      <?php echo $text?>
      </div>
      
   </div>
   
</div>