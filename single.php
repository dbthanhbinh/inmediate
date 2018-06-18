<?php get_header(); ?>

<section class="benefits">
	<div class="container">
		<header>
			<h1 class="subTitle"><?= the_title( )?></h1>
		</header>
		<div class="box-content">			
			<?php 
			the_post();
			the_content();
			?>
		</div>
	</div>
</section>
<?php get_footer();
