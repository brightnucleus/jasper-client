<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class InterSPResetTargetSimResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $Iccid = null;

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->Iccid;
    }


}

