<!-- section -->
<section class="box events" id="events">
    <header>
        <h2 class="tim">Events</h2>
        <p>Interested in meeting us? We invite you to come look us up at the following events where Inmediate will be
            present:
        </p>
    </header>
    <div class="box-content">
        <ul class="row listItem align-items-center">
            <?php   
                $q = getQueryArgs('event');
                if ( $q->have_posts() ) {
                    while ( $q->have_posts() ) : $q->the_post();
                    require ('loop.php');
                    endwhile;
                } // end have_posts()
            ?>            
        </ul>
    </div>
</section>