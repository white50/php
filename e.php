<?php

$url = 'https://kakaku.com/item/K0000962484/catalog/GradeID=42787/';



function GradeId($url) {
	if(!empty($url)) {
        $arr = preg_split('/[\/=]/',$url);
        $i = $arr[7];
        echo $i."\n";
        echo base64_encode($i);
	}else{
}}

GradeId($url)
?>

