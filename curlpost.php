<?php

$url = "https://reqres.in/api/users";

$data_array = array(
    'name' => 'John',
    'job' => 'Web Developer'
);

$data = http_build_query($data_array);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($ch);

if($e = curl_exec($ch)){
    echo $e;
}
else{
    $decoded = json_decode($resp);
    foreach($decoded as $key => $val){
        echo $key .':' .$val . '<br>';
    }
}
curl_close($ch);



?>