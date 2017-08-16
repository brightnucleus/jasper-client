<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class DeactivateSrcSimRequest extends JasperRequest
{

    /**
     * @var int
     */
    private $globalSimTransferId = null;

    /**
     * @var string
     */
    private $sourceIccid = null;

    /**
     * @var GlobalSimOtaAlgoType
     */
    private $otaAlgorithmType = null;

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
    public function getSourceIccid()
    {
        return $this->sourceIccid;
    }

    /**
     * @return GlobalSimOtaAlgoType
     */
    public function getOtaAlgorithmType()
    {
        return $this->otaAlgorithmType;
    }


}

