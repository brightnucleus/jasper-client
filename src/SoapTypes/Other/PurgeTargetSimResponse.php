<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class PurgeTargetSimResponse extends JasperResponse
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
     * @var SimStateType
     */
    private $simState = null;

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
     * @return SimStateType
     */
    public function getSimState()
    {
        return $this->simState;
    }


}

