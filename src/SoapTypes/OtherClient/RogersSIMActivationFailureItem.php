<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class RogersSIMActivationFailureItem
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $errorCode = null;

    /**
     * @var string
     */
    private $errorDescription = null;

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
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @return string
     */
    public function getErrorDescription()
    {
        return $this->errorDescription;
    }


}

