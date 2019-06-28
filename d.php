<?php

$tire_size_front = '255/40R20';
$tire_size_rear = '285/35R20';

$tread_width_front = '1,630';
$tread_width_rear = '1,640';



function OuterTreadWidth($tire_size_front,$tire_size_rear,$tread_width_front,$tread_width_rear) {
	if(!empty($tire_size_front)&&($tread_width_front)) {
        $tire_width_f = strstr($tire_size_front, '/', true);
        $tire_width_r = strstr($tire_size_rear, '/', true);
        $tread_width_f = str_replace(',','',$tread_width_front);
        $tread_width_r = str_replace(',','',$tread_width_rear);
        $outer_tread_width_f = $tire_width_f + $tread_width_f;
        $outer_tread_width_r = $tire_width_r + $tread_width_r;
        return max( $outer_tread_width_f, $outer_tread_width_r );
	}else{
}}

echo OuterTreadWidth($tire_size_front,$tire_size_rear,$tread_width_front,$tread_width_rear)
?>