<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class GlobalSimTransferResponseType
{

    /**
     * @var string
     */
    private $primaryIccid = null;

    /**
     * @var GlobalSimTransferStatusType
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
     * @var GlobalSimSubscriptionInfoType
     */
    private $targetSimSubscriptionInfo = null;

    /**
     * @return string
     */
    public function getPrimaryIccid()
    {
        return $this->primaryIccid;
    }

    /**
     * @return GlobalSimTransferStatusType
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

    /**
     * @return GlobalSimSubscriptionInfoType
     */
    public function getTargetSimSubscriptionInfo()
    {
        return $this->targetSimSubscriptionInfo;
    }


}

