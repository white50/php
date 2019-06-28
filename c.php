<?php

// $model_name = '2019年4月30日';

function asd( $release_date) {
	if(!empty($release_date)) {
        $convert1_release_date = preg_replace('/年|月/','/', $release_date);
        $convert2_release_date = preg_replace('/日/','', $convert1_release_date);
        // $model_year = str_replace($model_name_only,'',$model_name);
        // $model_year = str_replace(array($model_name_only, "年モデル"),'',$model_name);
        // print($model_name_div);
        print ($convert2_release_date);
	}else{
}
}

echo asd('2019年4月30日')
?>