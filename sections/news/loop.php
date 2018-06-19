<div class="item col-4">
    <?php 
        if(has_post_thumbnail()) {
            ?>
            <a href="<?php the_permalink()?>">
            <?php
            the_post_thumbnail();
            ?>
            </a>
            <?php
        }
    ?>
    <span><?php the_date() ?></span>
    <h5 class="home-news-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h5>
</div>