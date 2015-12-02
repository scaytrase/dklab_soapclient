<?php

namespace Dklab\SoapClient;

/**
 * Object is accessed via $dklabSoapClient->async->someMethod().
 */
class AsyncCaller
{
    /** @var SoapClient */
    private $_client;

    /**
     * AsyncCaller constructor.
     *
     * @param SoapClient $client
     */
    public function __construct(SoapClient $client)
    {
        $this->_client = $client;
    }

    /**
     * @param $functionName
     * @param $arguments
     *
     * @return Request
     */
    public function __call($functionName, $arguments)
    {
        return $this->_client->__soapCall($functionName, $arguments, array('async' => true));
    }
}
