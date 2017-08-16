<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetOrCreateSimFromVirtualSubscriptionResponse extends JasperResponse
{

    /**
     * @var int
     */
    private $globalSimTransferId = null;

    /**
     * @var string
     */
    private $sourceIccid = null;

    /**
     * @var GetOrCreateSimFromVirtualSubscriptionStatus
     */
    private $status = null;

    /**
     * @var GlobalSimSubscriptionInfoType
     */
    private $targetSimSubscriptionInfo = null;

    /**
     * @var string
     */
    private $targetSimRatePlan = null;

    /**
     * @var string
     */
    private $targetSimCommPlan = null;

    /**
     * @return int
     */
    public function getGlobalSimTransferId()
    {
        return $this->globalSimTransferId;
    }

    /**
     * @return string
     */
    public function getSourceIccid()
    {
        return $this->sourceIccid;
    }

    /**
     * @return GetOrCreateSimFromVirtualSubscriptionStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return GlobalSimSubscriptionInfoType
     */
    public function getTargetSimSubscriptionInfo()
    {
        return $this->targetSimSubscriptionInfo;
    }

    /**
     * @return string
     */
    public function getTargetSimRatePlan()
    {
        return $this->targetSimRatePlan;
    }

    /**
     * @return string
     */
    public function getTargetSimCommPlan()
    {
        return $this->targetSimCommPlan;
    }


}

