<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class PurgeTargetSimRequest extends JasperRequest
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


}

