<?php
header('Content-Type: application/json');
include 'data.php';
    /* function extractAds ($singleAds){
        return $singleAds['is_active'] == true;
    }

    $adsOk = array_values(array_filter($ads, 'extractAds'));
    $nAds = count($adsOk)-1;
    $x = rand(0, $nAds); */
    $nAds = count($ads)-1;
    $x = rand(0, $nAds);
    
    echo json_encode($ads[$x]);
?>