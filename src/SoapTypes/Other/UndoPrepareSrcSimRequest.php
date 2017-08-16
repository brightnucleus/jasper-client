<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class UndoPrepareSrcSimRequest extends JasperRequest
{

    /**
     * @var int
     */
    private $simTransferWorkflowId = null;

    /**
     * @var string
     */
    private $sourceIccid = null;

    /**
     * @var string
     */
    private $sourceSimState = null;

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
    public function getSourceIccid()
    {
        return $this->sourceIccid;
    }

    /**
     * @return string
     */
    public function getSourceSimState()
    {
        return $this->sourceSimState;
    }


}

