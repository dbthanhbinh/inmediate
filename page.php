<?php get_header(); ?>
<section class="page-detail">
	<div class="container">
		<header class="text-center">
			<h1 class="subTitle tim"><?= ucfirst(the_title( ))?></h1>
		</header>
		<div class="box-content-detail">			
			<?php 
				the_post();
				if(is_page('faqs')) {
					get_template_part( 'template-parts/faq/content', 'faq' );
				} else if(is_page( 'newsletters' )) {
					get_template_part( 'template-parts/newsletter/content', 'news' );
				} else if(is_page('news')) {
					include TEMPLATEPATH . '/sections/news/newsp.php';
				} else if(is_page('events')) {
					include TEMPLATEPATH . '/sections/event/eventp.php';
				}				
				else {
					the_content();
				}
			?>
		</div>
	</div>
</section>
<?php get_footer();
