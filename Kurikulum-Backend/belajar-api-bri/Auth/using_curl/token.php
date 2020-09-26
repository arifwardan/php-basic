<?php
$url ="https://sandbox.partner.api.bri.co.id/oauth/client_credential/accesstoken?grant_type=client_credentials";
$data = "client_id=lzbL9NHfExAG7uRaARE1GxffzkGKFAYd&client_secret=MqJUqIde4dNgNvgZ";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  //for updating we have to use PUT method.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
$result = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$json = json_decode($result, true);
$accesstoken = $json['access_token'];

// $datas = json_encode($result, true);

// echo "<br/> <br/>";
// echo "resssss : ".$result;
// echo "<br/> <br/>";

echo "accesstoken : ".$accesstoken;