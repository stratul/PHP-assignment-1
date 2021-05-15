<?php

$basicSallery = 20001;

if ($basicSallery <= 10000) {
    $grossSallery = $basicSallery + $basicSallery * 0.2 + $basicSallery * 0.8;
    echo 'Basic Sallery is '. $basicSallery .' and Gross Sallery is '. $grossSallery;
} else if ($basicSallery >= 10001 && $basicSallery <= 20000) {
    $grossSallery = $basicSallery + $basicSallery * 0.25 + $basicSallery * 0.9;
    echo 'Basic Sallery is '. $basicSallery .' and Gross Sallery is '. $grossSallery;
} else if($basicSallery >= 20001) {
    $grossSallery = $basicSallery + $basicSallery * 0.3 + $basicSallery * 0.95;
    echo 'Basic Sallery is '. $basicSallery .' and Gross Sallery is '. $grossSallery;
}

?>