<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class ResponseStatusType
{

    /**
     * @var string
     */
    private $responseStatus = null;

    /**
     * @var ResponseMessageType
     */
    private $message = null;

    /**
     * @return string
     */
    public function getResponseStatus()
    {
        return $this->responseStatus;
    }

    /**
     * @return ResponseMessageType
     */
    public function getMessage()
    {
        return $this->message;
    }


}

