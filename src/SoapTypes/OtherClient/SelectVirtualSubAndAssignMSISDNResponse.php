<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class SelectVirtualSubAndAssignMSISDNResponse extends JasperResponse
{

    /**
     * @var SelectVirtualSubAndAssignMSISDNStatus
     */
    private $status = null;

    /**
     * @var msisdnAssignmentStatus
     */
    private $msisdnAssignStatus = null;

    /**
     * @var string
     */
    private $transactionId = null;

    /**
     * @var GlobalSimSubscriptionInfoType
     */
    private $targetSimSubscriptionInfo = null;

    /**
     * @return SelectVirtualSubAndAssignMSISDNStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return msisdnAssignmentStatus
     */
    public function getMsisdnAssignStatus()
    {
        return $this->msisdnAssignStatus;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @return GlobalSimSubscriptionInfoType
     */
    public function getTargetSimSubscriptionInfo()
    {
        return $this->targetSimSubscriptionInfo;
    }


}

