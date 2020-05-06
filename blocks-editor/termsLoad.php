
<?php

$summ = get_field( 'summ' );
$loan = get_field( 'loan' );
$percent = get_field( 'percent' );
$time = get_field( 'time' );
?>

<div class="loan-terms-page">
   <div class="loan-terms-page__item">
      <div class="loan-terms-page__title">
      Сумма кредита:
      </div>      
      <?php echo $summ ?>
   </div>
   <div class="loan-terms-page__item">
   <div class="loan-terms-page__title">
   Срок кредита
      </div>      
      
      <?php echo $loan ?>
   </div>
   <div class="loan-terms-page__item">
   <div class="loan-terms-page__title">
   Процентные ставки
      </div>      
      
      <?php echo $percent ?>
   </div>
   <div class="loan-terms-page__item">
   <div class="loan-terms-page__title">
   Рассмотрение заявки
      </div>      
      
      <?php echo $time ?>
   </div>
   
</div>