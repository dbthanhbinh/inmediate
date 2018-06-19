<section class="box partners" id="partners">
      <div class="container">
        <header>
          <h2 class="tim">Key Partners</h2>
        </header>
        <div class="box-content">
        <?php 
          $number = 4;
          $q = getQueryArgs('ct_client', $tax_query=['taxonomy' => 'ct_clients_sets', 'termSlug' => 'partners']);
          if ( $q->have_posts() ) {
              ?>
              <div class="box-content">
                  <?php 
                  $setId = 'carouselPartners';                  
                  include TEMPLATEPATH . '/sections/featured/format.php';
                  ?>
              </div>
              <?php           
          } // end have_posts()

        ?>  
        </div>
      </div>
    </section>