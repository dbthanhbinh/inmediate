<section class="box featured fadeInDown" id="featured">
    <div class="container">        
        <header>
            <h2 class="tim">As Featured On</h2>
        </header>
        <div class="row">
        <?php 
            $number = 5;
            $q = getQueryArgs('ct_client', $tax_query=['taxonomy' => 'ct_clients_sets', 'termSlug' => 'as-featured-in']);
            if ( $q->have_posts() ) {
                ?>
                <div class="box-content">
                    <?php 
                    $setId = 'carouselFeatures';
                    require ('format.php');
                    ?>
                </div>
                <?php           
            } // end have_posts()
        ?>
        </div>
    </div>
</section>