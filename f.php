<?php

// $url='https://kakaku.com/item/70102810335/';
$url='https://kakaku.com/item/K0000914433/catalog/';


// urlからスラッグを設定
function GradeId($url) {
	if(!empty($url)) {
	    preg_match('/K\d{10}|\d{11}/', $url, $modelslug);
        // $arr = preg_split('/[\/=]/',$url);
        // return $arr[7];
        print $modelslug[0]."\n";
        print base64_encode($modelslug[0]);
        // var_dump($modelslug);
	}else{
}}
GradeId($url)
?>