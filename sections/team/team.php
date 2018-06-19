<!-- section -->
<?php   
    // $q = getQueryArgs('ct_team_person');
    // if ( $q->have_posts() ) {
    //     while ( $q->have_posts() ) : $q->the_post();

    //     the_title();
    //     echo '<br/>';
    //     endwhile;
    // } // end have_posts()
?>
<section class="box teams" id="teams">
    <div class="container">
    <header>
        <h2 class="tim">Meet Our Core Team</h2>
    </header>
    <div class="box-content">
        <h3 class="subTitle">A DIVERSE, WELL ROUNDED GROUP</h3>
        <ul class="row listItem">
            <?php 
                $q = getQueryArgs('ct_team_person', $tax_query=['taxonomy' => 'ct_teams', 'termSlug' => 'team']);
                if ( $q->have_posts() ) {
                    while ( $q->have_posts() ) : $q->the_post();
                        require ('loop.php');
                    endwhile;
                } // end have_posts()
            ?>             
        </ul>
        <h3 class="subTitle">BACKED BY WORLD CLASS ADVISORS</h3>
        <ul class="row listItem">
            <?php 
                $q = getQueryArgs('ct_team_person', $tax_query=['taxonomy' => 'ct_teams', 'termSlug' => 'advisors']);
                if ( $q->have_posts() ) {
                    while ( $q->have_posts() ) : $q->the_post();
                        require ('loop.php');
                    endwhile;
                } // end have_posts()
            ?> 
        </ul>
    </div>
    </div>
</section>