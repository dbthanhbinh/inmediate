<?php 
$carouselid = isset($setId) ? $setId : 'carouselFeatures';
?>
<div id="<?= $carouselid ?>" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">  
        <?php 
            $counts = 1;
            $active = '';                         
            $html = '';
            $pagesSet = 0;
            while ( $q->have_posts() ) : $q->the_post();
            $customMetas = get_post_custom();
            $_customMeta = [];
            if (isset($customMetas) || isset($customMetas['ct_client_data'][0])) {
                $_customMeta = unserialize($customMetas['ct_client_data'][0]);
            }
            
            if($counts == 1) {
                $active = 'active';
            } else {
                $active = '';
            }

            if($counts % $number == 1) {
                $pagesSet++;
                ?>
                <div class="carousel-item <?= $active ?>">
                    <ul class="row listImage">
                <?php
            }
            ?>                            
                <li class="item <?= ($number == 4) ? 'col-3' : '' ?>">
                    <?php 
                    if(has_post_thumbnail()) {
                        ?>
                        <a title="<?= the_title() ?>" href="<?= (isset($_customMeta['link'])) ? $_customMeta['link'] : '' ?>" target="<?= (isset($_customMeta['link_target'])) ? $_customMeta['link_target'] : '' ?>">
                            <?php 
                            the_post_thumbnail();
                            ?>
                        </a>
                        <?php
                    }
                    ?>
                </li>
            <?php
            
            if($counts % $number == 0) {
                ?>
                    </ul>
                </div>
                <?php
            }
                            
            $counts++;
            endwhile;
        ?> 
    </div>

    <?php if(count($q->posts) > 5):?>
    <ol class="carousel-indicators">        
        <?php 
        for($i = 0; $i < $pagesSet ; $i++){
            if ($i == 0){
                $cl = 'class="active"';
            } else {
                $cl = '';
            }
            ?>
            <li data-target="#<?= $carouselid ?>" data-slide-to="<?= $i ?>" <?= $cl ?>></li>
            <?php
        }
        ?>
    </ol>
    <?php endif ?>
</div>