<?php

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

function makeApiCall($userTitle, $userFirstName){
    $client = new GuzzleHttp\Client(['base_uri' => 'http://httpbin.org/response-headers']);

    $headers = [
        'Content-Type' => 'application/json'
    ];

    $body = '{"id": 3}';

    $request = new Request('POST', '', $headers, $body);
    $res = $client->sendAsync($request)->wait();

    if($res->getBody()) {
        var_dump('i did it');

    } else {
        throw new Exception("api call was unsuccessul");
    }
    return;
}