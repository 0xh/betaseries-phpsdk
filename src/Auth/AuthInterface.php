<?php
namespace BetaSeries\Auth;

interface AuthInterface
{
    /**
     * Construct the authentification with its options.
     *
     * @param array $options
     */
    public function __construct(array $options);

    /**
     * Set the Guzzle client instance
     *
     * @param \GuzzleHttp\Client $httpClient
     */
    public function setHttpClient(\GuzzleHttp\Client $httpClient);

    /**
     * Get Guzzle client
     *
     * @return \GuzzleHttp\Client
     */
    public function getHttpClient();
}
