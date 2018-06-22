<?php get_header(); ?>
<section class="page-detail">
	<div class="container">
		<header class="text-center">
			<h1 class="subTitle tim"><?= ucfirst(the_title( ))?></h1>
		</header>
		<div class="box-content-detail">			
		if ( have_posts() ) : ?>
			<?php
			if(have_posts()): the_post();
			/* Start the Loop */
			while ( have_posts() ) : the_post();			
				get_template_part( 'template-parts/post/content', get_post_format() );

			endwhile;
		else :
			get_template_part( 'template-parts/post/content', 'none' );

		endif; ?>
		</div>
	</div>
</section>
<?php get_footer();
