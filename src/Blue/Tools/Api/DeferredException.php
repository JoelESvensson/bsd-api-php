<?php

namespace Blue\Tools\Api;

use Exception;
use Psr\Http\Message\ResponseInterface;

class DeferredException extends Exception
{

    /**
     * @var ResponseInterface
     */
    private $response;

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
        parent::__construct();
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function getDeferredId()
    {
        return (string)$this->response->getBody();
    }
}
