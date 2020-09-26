<?php
require_once 'vendor/autoload.php';

$client = new GuzzleHttp\Client();
$url ="https://sandbox.partner.api.bri.co.id/oauth/client_credential/accesstoken?grant_type=client_credentials";
$data = [
    "client_id" => "lzbL9NHfExAG7uRaARE1GxffzkGKFAYd",
    "client_secret" => "MqJUqIde4dNgNvgZ"
];
$res = $client->request('POST', $url, $data);
// echo $res->getStatusCode();
// "200"
// print_r( $res->getHeader());
// 'application/json; charset=utf8'
 var_dump($res->getBody());