<?php

// $url = "午前11時～午後8時（最終受付時間午後7時半）　　土日祝　午前10時～午後6時（最終受付午後5時半）１０:００～１９：００（電話受付）９：００～１９：００";
// $url = "10:00~19:00";
// $url = "１０:００～１９：００（電話受付）９：００～１９：００";
$url = "完全予約制（受付時間 9:30～19:00）";
// $url = "null";

function NormalizeOpenhour($openhour) {
    if(!empty($openhour) && strpos($openhour,'null') === false) {
    // if(strpos($openhour,'時半') !== false || strpos($openhour,'時') !== false) { 
        
        $table = array(
          '時半'=>':30',
          '受付時間'=>'受付',
          '時'=>':00',
          '~'=>'〜',
          '：'=>':'
        );
        
        $search = array_keys( $table);
        $replace = array_values( $table);
        
        $i = str_replace($search,$replace,$openhour);
        return mb_convert_kana($i, "n",'UTF-8');
        
    }elseif(strpos($openhour,'null') !== false) {
        return '';
        
    }}
echo NormalizeOpenhour($url)
?>

