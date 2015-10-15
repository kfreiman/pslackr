<?php

namespace FullyBaked\Pslackr;

use GuzzleHttp\Client;

class Pslackr implements Transport
{
    protected $token;

    public function __construct($url)
    {
        $this->endpoint = $url;

        $this->client = new Client();
    }

    public function send(Messages\Message $message)
    {
        $client = new Client();
        $res = $client->request('GET', $this->endpoint, [
            'json' => $message()
        ]);
    }

}
