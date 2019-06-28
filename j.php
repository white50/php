<?php

$url = 'https://clinic.e-kuchikomi.info/detail/L_1100040';



function GradeId($url) {
	if(!empty($url)) {
        $arr = explode("detail/",$url);
        // $i = $arr[1];
        // // echo $arr[1];
        // echo $i."\n";
        echo base64_encode($arr[1]);
	}else{
}}

GradeId($url)
?>

