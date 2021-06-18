<?php


require_once 'get_data_user.php';

//echo "<pre>";
//print_r($data_user);
//echo "</pre>";

$data_low_pass = [];
for ($i=0; $i<count($data_user); $i++){
//    echo strlen($data_user[$i][2]);


    if (strlen($data_user[$i][2]) <= 8){
        $data_low_pass[] = $data_user[$i];
    }
}

?>
