<?php get_header(); ?>
<section class="page-detail">
	<div class="container">
		<header class="text-center">
			<h1 class="subTitle"><?= the_title( )?></h1>
		</header>
		<div class"single-box">
			<h5 class="text-center">
				<span>Singapore | <?= the_date()?> </span>

			</h5>
			<?php 
				get_template_part( 'template-parts/social/content', 'icons_s' );
			?>
		</div>
		
		<div class="box-content">			
			<?php 
			the_post();
			the_content();
			?>
		</div>
	</div>
</section>
<?php get_footer();
