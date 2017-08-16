<?php

namespace BrightNucleus\JasperClient\SoapTypes\GlobalSimTransferClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetGlobalSimTransferStatusResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $primaryIccid = null;

    /**
     * @var string
     */
    private $targetPartnerName = null;

    /**
     * @var string
     */
    private $globalAllianceName = null;

    /**
     * @var GlobalSimTransferType
     */
    private $globalSimTransferType = null;

    /**
     * @var GlobalSimTransferStatusType
     */
    private $status = null;

    /**
     * @var string
     */
    private $statusDetails = null;

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
     * @return string
     */
    public function getTargetPartnerName()
    {
        return $this->targetPartnerName;
    }

    /**
     * @return string
     */
    public function getGlobalAllianceName()
    {
        return $this->globalAllianceName;
    }

    /**
     * @return GlobalSimTransferType
     */
    public function getGlobalSimTransferType()
    {
        return $this->globalSimTransferType;
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
    public function getStatusDetails()
    {
        return $this->statusDetails;
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

