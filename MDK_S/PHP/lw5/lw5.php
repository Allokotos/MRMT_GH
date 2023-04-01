<?php

$curl = curl_init('https://favqs.com/api/qotd');

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_HEADER, false);

$responce = curl_exec($curl);

curl_close($curl);

$resArr = json_decode($responce, true);

echo $resArr["quote"]["body"];