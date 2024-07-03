
<?php

    $ch = curl_init();
    
    $url = "https://reqres.in/api/users?page=2";

    $fh = fopen("file.txt", "w");

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FILE, $fh);

    $resp = curl_exec($ch);

    if($e = curl_errno($ch)){
        echo $e;
    }
    else{
        $decoded = json_decode($resp);
        print_r($decoded);
    }
    fclose($fh);
    curl_close($ch);

?>