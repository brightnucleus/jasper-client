<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class SendIpMessageResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $responseMessage = null;

    /**
     * @var string
     */
    private $messageEncoding = null;

    /**
     * @return string
     */
    public function getResponseMessage()
    {
        return $this->responseMessage;
    }

    /**
     * @return string
     */
    public function getMessageEncoding()
    {
        return $this->messageEncoding;
    }


}

