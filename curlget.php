
<!-- fetch the data from api  -->
<?php

    $ch = curl_init();
    
    $url = "https://reqres.in/api/users?page=2";

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $resp = curl_exec($ch);

    if($e = curl_errno($ch)){
        echo $e;
    }
    else{
        $decoded = json_decode($resp);
        print_r($decoded);
    }

?>