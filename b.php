<?php

// $aaa = 'ノート e-POWER 2016年モデル';

// $bbb = preg_replace('/\s[^\s]*$/','', $aaa);

// $ccc = str_replace($bbb,'',$aaa);
// $ddd = str_replace('年モデル','',$ccc);

// print ($bbb); //モデル名
// print (trim($ddd)); //年式
?>

<?php


function ModelName($model_name) {
	if(!empty($model_name)) {
        $model_name_only = preg_replace('/\s[^\s]*$/','', $model_name);
        // $model_year = str_replace($model_name_only,'',$model_name);
        $model_year = str_replace(array($model_name_only, "年モデル"),'',$model_name);
        // print($model_name_div);
        return trim($model_year);
	}else{
}}

echo ModelName('ノート e-POWER 2016年モデル')
?>