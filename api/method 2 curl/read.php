<?php
$url = "https://crudcrud.com/api/cd62d59d60784febb89af39085519f19/users";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
if(curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
} else {
    echo $response;
}
curl_close($ch);
?>