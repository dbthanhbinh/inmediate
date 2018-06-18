<?php get_header(); ?>

<section class="benefits">
	<div class="container">
		<header>
			<h3 class="subTitle"><?= the_title( )?></h3>
		</header>
		<div class="box-content">			
			<?php 
			if (is_page( 'faq' )) {
				get_template_part( 'template-parts/faq/content', 'faq' );
			}
			?>
		</div>
	</div>
</section>
<?php get_footer();
