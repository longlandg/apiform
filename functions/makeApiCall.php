<?php

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

require_once "makeBodyJson.php";

function makeApiCall($userTitle, $userFirstName){
    $client = new GuzzleHttp\Client(['base_uri' => 'https://leads.supadata.co.uk/submit-lead']);

    $headers = [
        'Content-Type' => 'application/json'
    ];

    $body = makeBodyJson($userTitle, $userFirstName);

    $request = new Request('POST', '', $headers, $body);
    $res = $client->sendAsync($request)->wait();

    if($res->getBody()) {

    } else {
        throw new Exception("api call was unsuccessful");
    }
    return;
}