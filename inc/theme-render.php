<?php
/**
 * Render Favicon function
 *
 * @param string $favicon
 * @return void
 */
function renderFavicon($favicon = '')
{ 
    if(!$favicon)
        echo '<link rel="icon" type="image/png" href="'.$favicon.'" />';
    else
        echo '<link REL="SHORTCUT ICON" HREF="'.get_template_directory_uri().'/favicon.ico">';
}
add_action('site_head','renderFavicon');

/**
 * Render logo function
 *
 * @param string $logoUrl
 * @param string $alt
 * @param boolean $show
 * @return void
 */
function renderLogo($logoUrl = '', $alt = '', $show = true){
    $logo = '<img alt="'.$alt.'" src="' . get_template_directory_uri() . '/img/logo.png" />';
    $logo = $logoUrl ? '<img alt="'.$alt.'" src="' . $logoUrl . '" />' : $logo;
    if ($show) {
        echo $logo;
    } else {
        return $logo;
    }
}

/**
 * Render Social button function
 *
 * @param string $class
 * @return void
 */
function renderSocialButton ($class = ''){
    $class = $class ? 'class="'.$class.'"' : '';
    $html = '';
    $html .= '<ul '.$class.'>';

    $html .= '</ul>';
    echo $html;
}