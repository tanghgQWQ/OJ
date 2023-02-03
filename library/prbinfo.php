<?php
//be called like 'require ("./library/prbinfo.php");'
function get_prb_info($pid){
    $file = fopen("../problems/" . (string)($pid) . "/attrib.json","r");
    $attr = fgets($file);
    return json_decode($attr,true);
}

function get_prb_name($pid){
    $pinfo = get_prb_info($pid);
    return $pinfo["name"];
}

function get_prb_time_limit($pid){
    $pinfo = get_prb_info($pid);
    return $pinfo["time_limit"];
}
?>