<?php get_header(); ?>
<div class="header-section-page">
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h1><?php the_title() ?></h1>
		</div>
	</div>
</div>	
</div>

<div class="container">
<div class="row">
		<div class="col-md-12" style="margin-bottom: 40px">
			<?php the_post_thumbnail('full', 'class=img-responsive') ?>
		</div>
	</div>	
	<div class="row" >
		<div class="col-md-12" style="margin-bottom: 40px">
		<?php the_post(); the_content();?>	
		</div>
	</div>
</div>

<?php get_footer(); ?>
