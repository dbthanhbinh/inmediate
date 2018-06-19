<?php get_header(); ?>

<section class="benefits">
	<div class="container">
		<header class="text-center">
			<h3 class="subTitle"><?= the_title( )?></h3>
		</header>
		<div class="box-content">			
			<?php 
				the_post();
				the_content( );
			?>
		</div>
	</div>
</section>
<?php get_footer();
