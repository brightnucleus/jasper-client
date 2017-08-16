<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class InterSPMoveTargetSimResponse extends JasperResponse
{

    /**
     * @var int
     */
    private $distributedSimTransferId = null;

    /**
     * @var GetOrCreateSimFromVirtualSubscriptionStatus
     */
    private $status = null;

    /**
     * @var string
     */
    private $targetSimState = null;

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
    public function getDistributedSimTransferId()
    {
        return $this->distributedSimTransferId;
    }

    /**
     * @return GetOrCreateSimFromVirtualSubscriptionStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getTargetSimState()
    {
        return $this->targetSimState;
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

