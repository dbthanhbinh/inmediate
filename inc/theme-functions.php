<?php
## limit excerpt
function db_shortDesc($str, $len, $charset = 'UTF-8')
{
    $len = $len ? $len : 80;
    $str = html_entity_decode($str, ENT_QUOTES, $charset);
    if (mb_strlen($str) > $len) {
        $arr    = explode(' ', $str);
        $str    = substr($str, 0, $len);
        $arrRes = explode(' ', $str);
        $last   = $arr[count($arrRes) - 1];
        unset($arr);
        if (strcasecmp($arrRes[count($arrRes) - 1], $last)) {
            unset($arrRes[count($arrRes) - 1]);
        }
        return implode(' ', $arrRes) . "...";
    }
    return $str;
}

function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

class ThemeMods {
    private $themeMods; 
    public function __construct() {
        $this->themeMods = get_theme_mods();
    }

    public function getMods($modName = '') {
        if (!$modName)
            return null;
        return $this->themeMods[$modName];
    }
}
$themeMods = new ThemeMods();

// Test show logo
// print_r($themeMods);