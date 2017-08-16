<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class InterSPMoveTargetSimRequest extends JasperRequest
{

    /**
     * @var int
     */
    private $distributedSimTransferId = null;

    /**
     * @var string
     */
    private $Iccid = null;

    /**
     * @var string
     */
    private $targetAccount = null;

    /**
     * @var string
     */
    private $targetOperator = null;

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
     * @return string
     */
    public function getIccid()
    {
        return $this->Iccid;
    }

    /**
     * @return string
     */
    public function getTargetAccount()
    {
        return $this->targetAccount;
    }

    /**
     * @return string
     */
    public function getTargetOperator()
    {
        return $this->targetOperator;
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

