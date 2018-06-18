<!-- section -->
<?php   
    $q = getQueryArgs('ct_team_person');
    if ( $q->have_posts() ) {
        while ( $q->have_posts() ) : $q->the_post();

        the_title();
        echo '<br/>';
        endwhile;
    } // end have_posts()
?>