<?php get_header(); ?>

<div class="container">
    <?php 
    include TEMPLATEPATH . '/sections/setting.php'; 
    require ('sections/event/event.php');

    require ('sections/news/news.php');
    ?>
	
</div>

<?php get_footer();
