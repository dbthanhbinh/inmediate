<?php
/**
 * * ***************************************************************************
 * Is admin
 */
if(is_admin()) {
    require ('inc/admin/customizer.php');

} else {    
    /**
     * ***************************************************************************
     * Front end
     */
    require ('inc/theme-functions.php');
    require ('inc/theme-render.php');

    // Test show logo
    // $logo = $themeMods->getMods('img-upload-logo');
    // renderLogo($logo);
}