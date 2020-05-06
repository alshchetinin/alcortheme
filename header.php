<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="header" class="header">
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

</header>
