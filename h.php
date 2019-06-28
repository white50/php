<?php

// $url='https://kakaku.com/item/70102810335/';
$model_name='ジャズ 1993年モデル';


// モデル名のみ取得
function ModelName($model_name) {
	if(!empty($model_name)) {
        $model_name_only = preg_replace('/\s[^\s]*$/','', $model_name);
        return $model_name_only;
	}else{
}}

echo ModelName($model_name);

// 年式のみ取得
// function ModelYear($model_name) {
// 	if(!empty($model_name)) {
//         $model_name_only = preg_replace('/\s[^\s]*$/','', $model_name);
//         $model_year = str_replace(array($model_name_only, "年モデル"),'',$model_name);
//         return trim($model_year);
// 	}else{
// }}

// echo ModelYear($model_name);
?>