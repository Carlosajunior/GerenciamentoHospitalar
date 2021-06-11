<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class controllerCIDApi extends Controller
{
    public function CID(){
        $client = new Client();
        $url = "http://cid10-api.herokuapp.com/cid10";
        $params = [
            //parametros que devem ser passados
        ];
        $headers = [
            //api-key
        ];
        $response = $client->request('GET', $url, [
            'json' => $params,
            'headers' => $headers,
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());
        return $responseBody;
    }
}
