<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class ActivateTargetSimRequest extends JasperRequest
{

    /**
     * @var int
     */
    private $globalSimTransferId = null;

    /**
     * @var string
     */
    private $targetIccid = null;

    /**
     * @var string
     */
    private $targetSimState = null;

    /**
     * @var GlobalSimOtaAlgoType
     */
    private $otaAlgorithmType = null;

    /**
     * @var string
     */
    private $targetRatePlan = null;

    /**
     * @var string
     */
    private $targetCommPlan = null;

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
     * @return GlobalSimOtaAlgoType
     */
    public function getOtaAlgorithmType()
    {
        return $this->otaAlgorithmType;
    }

    /**
     * @return string
     */
    public function getTargetRatePlan()
    {
        return $this->targetRatePlan;
    }

    /**
     * @return string
     */
    public function getTargetCommPlan()
    {
        return $this->targetCommPlan;
    }


}

