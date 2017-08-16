<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class InterSPPrepareSrcSimRequest extends JasperRequest
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
    private $copyAllAttributes = null;

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
    public function getCopyAllAttributes()
    {
        return $this->copyAllAttributes;
    }


}

