<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class SubscriberResponseMessageType
{

    /**
     * @var string
     */
    private $errorCode = null;

    /**
     * @var string
     */
    private $errorSubCode = null;

    /**
     * @var string
     */
    private $errorName = null;

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
    public function getErrorSubCode()
    {
        return $this->errorSubCode;
    }

    /**
     * @return string
     */
    public function getErrorName()
    {
        return $this->errorName;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }


}

