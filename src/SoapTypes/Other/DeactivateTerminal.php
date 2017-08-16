<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class DeactivateTerminal
{

    /**
     * @var int
     */
    private $simId = null;

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @return int
     */
    public function getSimId()
    {
        return $this->simId;
    }

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }


}

