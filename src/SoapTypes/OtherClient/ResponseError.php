<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class ResponseError
{

    /**
     * @var string
     */
    private $errorCode = null;

    /**
     * @var string
     */
    private $errorMessage = null;

    /**
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }


}

