<?php
namespace BetaSeries;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Psr7\Response;

class Client {
    const API_URL = 'https://api.betaseries.com/';
    private $bsApiKey = null;
    private $accessToken = null;
    //private $httpClient;

    public function __construct($bsApiKey)
    {
        $this->bsApiKey = $bsApiKey;
        //$this->httpClient = new HttpClient(['base_uri' => self::API_URL]);
    }

    public function authenticate($authType = '\BetaSeries\Auth\BasicAuth', array $options = [])
    {
        $auth = new $authType($options);
    }

    public function isAuthenticated()
    {
        if($this->accessToken){
            return true;
        }
        return false;
    }

    static protected function initHttpClient($object)
    {
        if (!$object->getHttpClient()){
            $object->setHttpClient(new HttpClient([
                'base_uri' => self::API_URL
            ]));
        }
    }
}
