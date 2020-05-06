<?php get_header(); ?>

<main>
   <section id="main-slider">
      <div class="main-slider owl-carousel">
         <?php while( have_rows('main-slider', 'option') ): the_row(); 

			// переменные
			$title = get_sub_field('title');
			$description = get_sub_field('description');
			$picture = get_sub_field('picture');
			$href = get_sub_field('href');
			$buttonName = get_sub_field('button-name');
			?>
         <div class="main-slider-item">
            <div class="main-slider-item__picture" style="background-image: url(<?php echo $picture ?>)"></div>
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-12">
                     <div class="main-slider-item__text">
                        <h2><?php echo $title ?></h2>
                        <p>
                           <?php echo $description ?>
                        </p>
                        <a href="<?php echo $href ?>" class="btn"><?php echo $buttonName ?></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php endwhile; ?>
      </div>
      <div class="main-slider-navigation-wrapper">
         <div class="container">
            <div class="row">
               <div class="col-ls-12">
                  <div class="main-slider-navigation">
                     <div class="main-slider-navigation__left">
                        <img src="<?php  echo get_template_directory_uri()?>/img/svg/chevron-left.svg" alt=""
                           class="img-responsive">
                     </div>
                     <div class="main-slider-navigation__right">
                        <img src="<?php echo get_template_directory_uri()?>/img/svg/chevron-right.svg" alt=""
                           class="img-responsive">
                     </div>
                  </div>
               </div>
            </div>
         </div>
   </section>
   <section id="lead-text">
      <div class="container">
         <div class="row">
            <div class="col-lg-5">
               <h2><?php the_field('lead-title', 'option')?></h2>
            </div>
            <div class="col-lg-7">
               <p><?php the_field('lead-description', 'option')?></p>
            </div>
         </div>
      </div>
   </section>

   <section id="advantage">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <h2><?php the_field('advantage-title', 'option')?></h2>
            </div>
         </div>
         <div class="row">
            <?php while( have_rows('advantage', 'option') ): the_row(); 

				// переменные
				$icon = get_sub_field('icon');
				$title = get_sub_field('title');
				$text = get_sub_field('text');
				?>
            <div class="col-lg-five">
               <div class="advantage-item">
                  <div class="advantage-item__icon">
                     <img src="<?php echo $icon?>" alt="" width="80px">
                  </div>
                  <div class="advantage-item__title">
                     <h4><?php echo $title?></h4>
                  </div>
                  <div class="advantage-item__text">
                     <p><?php echo $text?></p>
                  </div>


               </div>
            </div>

            <?php endwhile; ?>

         </div>
      </div>

   </section>

   <section id="offer">
      <div class="container">
         <div class="row">
            <div class="col-lg-4">
               <div class="main-form">
                  <h3>Быстрая заявка</h3>
                  <p>Оформление заявки не займет у вас больше чем 1 минута. После оформления, наши менеджеры свяжуться с
                     вами для подробного обсуждения.</p>
                  <?php echo do_shortcode('[contact-form-7 id="53" title="Форма на главной"]')?>
                  <p class="policy">Нажимая на кнопку, я соглашаюсь с политикой конфиденциальности</p>
               </div>
            </div>
            <div class="col-lg-8">
               <h2>Наши выгодные предложения</h2>
               <div class="tabs">
                  <?php $countTabs = 0;?>
                  <?php while( have_rows('offers', 'option') ): the_row(); 

						// переменные
						$title = get_sub_field('title');	
						$dataTab = get_sub_field('data-tab')					
						?>
                  <a href="#<?php echo $dataTab?>"
                     class="tabs__item <?php if ( !$countTabs ) echo 'tabs__item-active'; ?>"
                     data-tab="<?php echo $dataTab?>"><?php echo $title?></a>


                  <?php $countTabs++; endwhile; ?>


               </div>
               <div class="offers">
                  <?php $countTab = 0;?>
                  <?php while( have_rows('offers', 'option') ): the_row(); 

						// переменные
						$title = get_sub_field('title');	
						$dataTab = get_sub_field('data-tab');
						$img = get_sub_field('img');
						$advantageList = 'advantage-list';
						$link = get_sub_field('link');
						$nameBtn = get_sub_field('name-btn');
						$amountCredit = get_sub_field('amount-credit');
						$loanTerm = get_sub_field('loan-term');
						$rate = get_sub_field('rate');
						$applicationConsideration = get_sub_field('application-consideration');
						

						?>
                  <div class="offers__tab <?php if ( !$countTab ) echo 'offers__tab-active'; ?>"
                     id="<?php echo $dataTab ?>" data-tab="<?php echo $dataTab ?>">
                     <div class="offers-list">
                        <div class="offers-list__wrap">
                           <ul>
                              <?php while( have_rows($advantageList) ): the_row(); 
										
										// переменные
										$advantageLisTitle = get_sub_field('advantage-list-title');
										?>
                              <li><?php echo $advantageLisTitle?></li>

                              <?php endwhile; ?>

                           </ul>
                           <a href="<?php echo $link?>" class="second-btn"><?php echo $nameBtn ?></a>
                        </div>


                        <div class="offers-list__img" style="background-image: url(<?php echo $img ?>)"></div>

                     </div>
                     <div class="offers-info">
                        <div class="row">
                           <div class="col-6">
                              <div class="offers-info__item">
                                 <h4>Размер кредита</h4>
                                 <p><?php echo $amountCredit ?></p>
                              </div>
                           </div>

                           <div class="col-6">
                              <div class="offers-info__item">
                                 <h4>Срок кредита</h4>
                                 <p><?php echo $loanTerm ?></p>
                              </div>
                           </div>
                           <div class="col-6">
                              <div class="offers-info__item">
                                 <h4>Ставка / переплата</h4>
                                 <p><?php echo $rate?></p>
                              </div>
                           </div>
                           <div class="col-6">
                              <div class="offers-info__item">
                                 <h4>Рассмотрение заявки</h4>
                                 <p><?php echo $applicationConsideration ?></p>
                              </div>
                           </div>

                        </div>
                        <a href="/order" class="second-btn">Оставить заявку</a>
                     </div>

                  </div>


                  <?php  $countTab++; endwhile; ?>




               </div>
               <div class="offers-action">
                  <p>Для более детального расчета, вы можете связаться с нами по телефону. Наши менеджеры вас
                     проконсультируют.</p>
                  <p>Единая справочная служба</p>

                  <a href="tel:<?php the_field('phone', 'option')?>"><?php the_field('phone', 'option')?></a>
                  <p><?php the_field('work_time', 'option')?></p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section id="main-banner">
      <div class="main-banner owl-carousel">
         <?php while( have_rows('main-banner', 'option') ): the_row(); 

			// переменные
			$title = get_sub_field('title');
			$description = get_sub_field('description');
			$picture = get_sub_field('picture');
			$href = get_sub_field('href');
			$buttonName = get_sub_field('button-name');
			?>
         <div class="main-banner-item">
            <div class="main-banner-item__picture" style="background-image: url(<?php echo $picture ?>)"></div>
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-12">
                     <div class="main-banner-item__text">
                        <h2><?php echo $title ?></h2>
                        <p>
                           <?php echo $description ?>
                        </p>
                        <a href="<?php echo $href ?>" class="btn"><?php echo $buttonName ?></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php endwhile; ?>
      </div>
      <div class="main-banner-navigation-wrapper">
         <div class="container">
            <div class="row">
               <div class="col-ls-12">
                  <div class="main-banner-navigation">
                     <div class="main-banner-navigation__left">
                        <img src="<?php  echo get_template_directory_uri()?>/img/svg/chevron-left.svg" alt=""
                           class="img-responsive">
                     </div>
                     <div class="main-banner-navigation__right">
                        <img src="<?php echo get_template_directory_uri()?>/img/svg/chevron-right.svg" alt=""
                           class="img-responsive">
                     </div>
                  </div>
               </div>
            </div>
         </div>
   </section>
   <section id="bank">
      <div class="container">
         <div class="row">
            <div class="col-lg-8">
               <h2><?php the_field('bank-partners-title', 'option')?></h2>
            </div>
         </div>
         <div class="row">
            <?php while( have_rows('bank-logos', 'option') ): the_row(); 

// переменные
$logo = get_sub_field('logo');		
?>
            <div class="col-lg-2">
               <div class="bank-logo">
                  <img src="<?php echo $logo?>" alt="" class="img-responsive">
               </div>

            </div>


            <?php endwhile; ?>
         </div>
      </div>
   </section>


</main>

<?php get_footer(); ?>