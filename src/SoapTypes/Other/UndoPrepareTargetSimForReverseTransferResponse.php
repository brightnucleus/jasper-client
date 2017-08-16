<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class UndoPrepareTargetSimForReverseTransferResponse extends JasperResponse
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


}

