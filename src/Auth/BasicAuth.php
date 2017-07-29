<?php
namespace BetaSeries\Auth;

use BetaSeries\Auth\AuthInferface;
use BetaSeries\HttpClientAware;

class BasicAuth implements AuthInterface
{
    use HttpClientAware;

    private $md5Password = null;
    private $user = null;

    /**
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->md5Password = $options['password'];
        $this->user = $options['user'];
    }
}
