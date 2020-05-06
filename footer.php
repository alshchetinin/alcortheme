<section id="credit-just">

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2><?php the_field('credit-just', 'option')?></h2>
			</div>
		</div>
		<div class="row">
		<?php while( have_rows('credit-just-card', 'option') ): the_row(); 

			// переменные
			$icon = get_sub_field('icon');
			$text = get_sub_field('text');
			?>
				<div class="col-lg-3">
				<div class="credit-just-card">
					<img src="<?php echo $icon?>" alt="" width='30px' height='30px'>
					<p><?php echo $text?></p>
				</div>
				</div>		

		<?php endwhile; ?>
		</div>
	</div>

</section>

<footer class="footer">
<div class="container">
	
	<div class="row">
			<div class="col-xl-2 col-lg-12 ">
			<div class="logo-wrapper">

				<div class="logo">
					<a href="/">
						<img src="<?php the_field('logo', 'option')?>" alt="Логотип Алькор Финанс" class="img-responsive">
					</a>
				</div>
				<div class="header__info_mobile">
							<p>Ежедневно с 10:00 до 19:00 (мск.)</p>
							<a href="tel:+7 (495) 021-57-06">+7 (495) 021-57-06</a>
				</div>

			</div>
			<div class="mobile-burger-wrapper">
			<div class="mobile-burger">
				<a href="#" class="toggle-mnu"><span></span></a>
			</div>
			<a href="/order" class="header-cta">Едина заявка на кредит</a>
			
			</div>
			</div>
			<div class="col-xl-10 col-lg-12">
			<div class="mobile-menu">
			<div class="header__top">
					<div class="sectond-menu">
					<nav>
					<?php 
							$args = array(
								'theme_location' => 'top'
							);
							wp_nav_menu( $args );
							?>
					</nav>

					</div>

					<div class="header__info">
							<p><?php the_field('work_time', 'option')?></p>
							<a href="tel:<?php the_field('phone', 'option')?>"><?php the_field('phone', 'option')?></a>
					</div>
			</div>
			<div class="header__bottom">
			<nav>
			<div class="main-menu">
					<?php 
					$args = array(
						'theme_location' => 'main'
					);
					wp_nav_menu( $args );
					?>
					</div>
			</nav>

					<div class="order-pay">
						<a href="/order" class="header-cta">Единая заявка на кредит</a>
					</div>
				</div>

			</div>
			</div>

		</div>

	</div>

</footer>
<?php wp_footer(); ?>
</body>
</html>
