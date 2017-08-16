<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class InterSPResetSrcSimRequest extends JasperRequest
{

    /**
     * @var int
     */
    private $distributedSimTransferId = null;

    /**
     * @var string
     */
    private $sourceIccid = null;

    /**
     * @var bool
     */
    private $resetFlag = null;

    /**
     * @var string
     */
    private $sourceSimState = null;

    /**
     * @var GlobalSimOtaAlgoType
     */
    private $otaAlgorithmType = null;

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
    public function getSourceIccid()
    {
        return $this->sourceIccid;
    }

    /**
     * @return bool
     */
    public function getResetFlag()
    {
        return $this->resetFlag;
    }

    /**
     * @return string
     */
    public function getSourceSimState()
    {
        return $this->sourceSimState;
    }

    /**
     * @return GlobalSimOtaAlgoType
     */
    public function getOtaAlgorithmType()
    {
        return $this->otaAlgorithmType;
    }


}

