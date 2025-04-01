<?php
function getCSS($pageName) {
    $cssMap = json_decode(file_get_contents('css_map.json'), true);
    if (isset($cssMap[$pageName])) {
        foreach ($cssMap[$pageName] as $cssFile) {
            echo '<link rel="stylesheet" href="' . $cssFile . '">';
        }
    }
}