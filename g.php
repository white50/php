<?php

// $url='https://kakaku.com/item/70102810335/';
$url_key='K0000914433';


// url_keyをスラッグbase64に変換
function UrlKeySlug($url_key) {
	if(!empty($url_key)) {
        return base64_encode($url_key);
	}else{
}}
echo UrlKeySlug($url_key)
?>