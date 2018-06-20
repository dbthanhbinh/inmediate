<?php get_header(); ?>
<section class="page-detail">
	<div class="container">
		<header class="text-center">
			<h1 class="subTitle"><?= the_title( )?></h1>
		</header>
		<div class="box box-content-detail">			
			<?php 
				the_post();
				if(is_page('faqs')) {
					get_template_part( 'template-parts/faq/content', 'faq' );
				} else if(is_page( 'newsletters' )) {
					get_template_part( 'template-parts/newsletter/content', 'news' );
				} 				
				else {
					the_content();
				}
			?>
		</div>
	</div>
</section>
<?php get_footer();
