<!-- news section -->
<section class="box news" id="news">
    <header>
    <h2 class="tim">News</h2>
    </header>
    <div class="box-content">
    <div class="row listItem">
        <?php 
            $q = getQueryArgs();
            if ( $q->have_posts() ) {
                while ( $q->have_posts() ) : $q->the_post();
                    require ('loop.php');
                endwhile;
            } // end have_posts()
        ?>     
    </div>
    </div>
</section>