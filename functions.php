<?php 

date_default_timezone_set('Europe/Athens');

#return fontawesome icon
function i($code){
    $icon = '<i class="fa-solid fa-'.$code.'"></i>';
    return $icon;
}

#make the unix date look nice
function date_nice($date){
    return date('M j Y g:i A', $date);
}

function time_nice($seconds){

    $h = floor(($seconds/60)/60);
    $m = round(($seconds/60) - ($h * 60));

    return $h.' hrs : ' .$m.' mins';
}

function save($data){
    $json = json_encode($data);
    $file= fopen("data.json","w");
    fwrite($file, $json);
    fclose($file);
}

?>