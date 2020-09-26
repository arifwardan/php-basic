<?php

require_once '../vendor/autoload.php';
$client = new GuzzleHttp\Client();
$headers = new GuzzleHttp\Client(
    [
    'headers' => ['Content-Type' => 'application/x-www-form-urlencoded']
    ]);
$url ="https://sandbox.partner.api.bri.co.id/oauth/client_credential/accesstoken?grant_type=client_credentials";
$response = $client->request(    
    'POST',
    $url,
    [ 
        'json' => [
            "client_id" => "lzbL9NHfExAG7uRaARE1GxffzkGKFAYd",
            "client_secret" => "MqJUqIde4dNgNvgZ",
            'headers' => [
                'Content-Type' => 'application/x-www-form-urlencoded'
            ]
        ],
    ]
);
