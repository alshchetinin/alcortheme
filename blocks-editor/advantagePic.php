
<?php

$title = get_field( 'title' );
$picture = get_field('picture');
?>

<div class="advantage-page-item" style="background-image: url(<?php echo $picture ?>)">
   <div class="advantage-page-item__title">
      <?php echo $title?>
   </div>
</div>