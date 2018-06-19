<?php 
$customMetas = get_post_custom();
$_customMeta = [];
if (isset($customMetas) || isset($customMetas['ct_team_person_data'][0])) {
    $_customMeta = unserialize($customMetas['ct_team_person_data'][0]);
} 
// print_r($_customMeta);
?>
<li class="item col-4 core-team-item">
    <div class="bordered-box">
        <?= the_post_thumbnail(); ?>
    </div>
    <a target="_blank" href="<?= (isset($_customMeta['social_link_linkedin']) && $_customMeta['social_link_linkedin']) ? $_customMeta['social_link_linkedin'] : '' ?>"><span class="icon icon04"></span></a>
    <h3><?= the_title()?></h3>
    <p class="tit"><?= (isset($_customMeta['position']) && $_customMeta['position']) ? $_customMeta['position'] : '' ?></p>
    
    <span class="strict-direction"><i class="fa fa-caret-up"></i></span>
    <div class="core-team-item-div">
        <?= the_content()?>
    </div>
</li>