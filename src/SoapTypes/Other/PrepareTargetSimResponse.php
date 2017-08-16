<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class PrepareTargetSimResponse extends JasperResponse
{

    /**
     * @var int
     */
    private $simTransferWorkflowId = null;

    /**
     * @var string
     */
    private $targetIccid = null;

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
    public function getSimTransferWorkflowId()
    {
        return $this->simTransferWorkflowId;
    }

    /**
     * @return string
     */
    public function getTargetIccid()
    {
        return $this->targetIccid;
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

