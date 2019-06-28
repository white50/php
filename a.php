<?php
function asd( $kw_highest_output) {
	if(!empty($kw_highest_output)) {
        $arr = split(",", $kw_highest_output);
        return $arr[0];
        // echo $arr[0];
        // echo $arr[1];
    }
    else{return 'NULLです。';}
    
}
echo asd()
?>