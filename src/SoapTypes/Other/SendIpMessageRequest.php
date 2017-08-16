<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class SendIpMessageRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $protocol = null;

    /**
     * @var int
     */
    private $port = null;

    /**
     * @var string
     */
    private $message = null;

    /**
     * @var int
     */
    private $responseTimeout = null;

    /**
     * @var string
     */
    private $messageEncoding = null;

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }

    /**
     * @return string
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return int
     */
    public function getResponseTimeout()
    {
        return $this->responseTimeout;
    }

    /**
     * @return string
     */
    public function getMessageEncoding()
    {
        return $this->messageEncoding;
    }


}

