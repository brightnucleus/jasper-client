<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class SimTransferResponseType
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var bool
     */
    private $status = null;

    /**
     * @var string
     */
    private $errorCode = null;

    /**
     * @var string
     */
    private $errorDetails = null;

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }

    /**
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
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
    public function getErrorDetails()
    {
        return $this->errorDetails;
    }


}

