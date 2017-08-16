<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetGlobalTransferSimStatusResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $primaryIccid = null;

    /**
     * @var GlobalSimTransferType
     */
    private $transferType = null;

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
    private $sourceOperatorName = null;

    /**
     * @var string
     */
    private $sourceAccountName = null;

    /**
     * @var string
     */
    private $targetOperatorName = null;

    /**
     * @var string
     */
    private $targetAccountName = null;

    /**
     * @var GlobalSimSourceSubscriptionInfoType
     */
    private $sourceSimSubscriptionInfo = null;

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
     * @return GlobalSimTransferType
     */
    public function getTransferType()
    {
        return $this->transferType;
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
    public function getSourceOperatorName()
    {
        return $this->sourceOperatorName;
    }

    /**
     * @return string
     */
    public function getSourceAccountName()
    {
        return $this->sourceAccountName;
    }

    /**
     * @return string
     */
    public function getTargetOperatorName()
    {
        return $this->targetOperatorName;
    }

    /**
     * @return string
     */
    public function getTargetAccountName()
    {
        return $this->targetAccountName;
    }

    /**
     * @return GlobalSimSourceSubscriptionInfoType
     */
    public function getSourceSimSubscriptionInfo()
    {
        return $this->sourceSimSubscriptionInfo;
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

