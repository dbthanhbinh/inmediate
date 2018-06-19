<?php 
$customMetas = get_post_custom();

$eventStartDate = (isset($customMetas['event-start-date'][0]) && $customMetas['event-start-date'][0]) ? $customMetas['event-start-date'][0] : '';
$eventLocation = (isset($customMetas['event-location'][0]) && $customMetas['event-location'][0]) ? $customMetas['event-location'][0] : '';
$eventTime = (isset($customMetas['event-time'][0]) && $customMetas['event-time'][0]) ? $customMetas['event-time'][0] : '';
$eventLink = (isset($customMetas['event-link'][0]) && $customMetas['event-link'][0]) ? $customMetas['event-link'][0] : '';
?>
<li class="col-6">
    <div class="item">
        <h3><?= the_title()?></h3>
        <div class="content">
            <?php 
            if(has_post_thumbnail()) {
                ?>
                <a target="_blank" href="<?= $eventLink ?>">
                <?php
                the_post_thumbnail();
                ?>
                </a>
                <?php
            }
            ?>
            <p><span>Date:</span> <?= $eventStartDate ? date_i18n( get_option( 'date_format' ), esc_attr($eventStartDate) ) : '' ?></p>
            <p><span>Time:</span> <?= $eventTime ? esc_attr($eventTime) : '' ?></p>
            <p><span>Location:</span> <?= $eventLocation ? esc_attr($eventLocation) : '' ?></p>
        </div>
    </div>
</li>