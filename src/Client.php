<?php
namespace Betaseries;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;

class Client {
    const API_URL = 'https://api.betaseries.com/';
    private $bsApiKey = null;
    private $accessToken = null;
    private $httpClient;

    public function __construct($bsApiKey)
    {
        $this->bsApiKey = $bsApiKey;
        $this->httpClient = new Client(['base_uri' => $this->bsApiUrl]);
    }
}
