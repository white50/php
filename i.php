<?php

// $a = "目頭・目じりの切開×徳島"; 
// //   $b = split("×",$a); 
//   $c = explode("×",$a);
// //   $d = preg_split("/×/",$a); 
//   print($c[0])."\n"; 
//   print($c[1])."\n"; 
  
  
  
  
// // $url='https://kakaku.com/item/70102810335/';
$title='目頭・目じりの切開×徳島';


// モデル名のみ取得
function ChildCat($title) {
	if(!empty($title)) {
	    $title_divide = explode("×",$title);
        // $model_name_only = preg_replace('/\s[^\s]*$/','', $model_name);
        echo $title_divide[0];
	}else{
}}

ChildCat($title);

// function Prefecture($title) {
// 	if(!empty($title)) {
// 	    $title_divide = explode("×",$title);
//         // $model_name_only = preg_replace('/\s[^\s]*$/','', $model_name);
//         return $title_divide[1];
// 	}else{
// }}

// echo Prefecture($title);

?>