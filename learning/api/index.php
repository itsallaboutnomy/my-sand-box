<?php

$source = 'https://pi-prod-webapi-s3-uploads.s3-us-west-2.amazonaws.com/punchlist/1603472161/punchlist_991755f930b21de6f9.jpg';
$target = 'image.jpg';

$ch = curl_init($source);
$fp = fopen($target, "wb");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
fclose($fp);

?>