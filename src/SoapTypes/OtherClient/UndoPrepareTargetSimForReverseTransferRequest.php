<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class UndoPrepareTargetSimForReverseTransferRequest extends JasperRequest
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


}

