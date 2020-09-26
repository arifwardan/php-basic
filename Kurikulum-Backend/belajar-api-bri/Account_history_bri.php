<?php

require_once 'vendor/autoload.php';

$client = new GuzzleHttp\Client();
$body       = "";
$NoRek      = "888801000157508";
$verb       = "GET";
$url        = "https://sandbox.partner.api.bri.co.id";
$token      = "7E1XAfJu1bA00i1fxnjN5G5PqIVC";
$timestamp  = gmdate("Y-m-d\TH:i:s.000\Z");
$path       = "/sandbox/v2/inquiry/".$NoRek;
$secret     = "MqJUqIde4dNgNvgZ";
$base64sign = generateSignature($path,$verb,$token,$timestamp,$body,$secret);
$request_headers = [
    "headers" => [
        "Authorization" => "Bearer $token",
        "BRI-Timestamp" => $timestamp,
        "BRI-Signature" => $base64sign
    ]
];

//$res = $client->request($verb, $url . $path, $request_headers);


function generateSignature($path, $verb, $token, $timestamp, $body, $secret) {
    $payload = "path=$path&verb=$verb&token=Bearer $token&timestamp=$timestamp&body=$body";
    $signPayload = hash_hmac('sha256', $payload, $secret, true);
    $base64sign = base64_encode($signPayload);
    
    return $base64sign;
}

//print_r($res->getBody());
print_r($request_headers);