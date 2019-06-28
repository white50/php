<?php

$url = "https://www.keisei-cs.com?argument=JdFLFatb&dmai=a5bd68d13d76cd";

function NormalizeUrl($url) {
    $keys = parse_url($url); //パース処理
    if(!empty($keys["scheme"])) { 
        return $keys["scheme"].'://'.$keys["host"]; 
    }else{
}}
echo NormalizeUrl($url)
?>

