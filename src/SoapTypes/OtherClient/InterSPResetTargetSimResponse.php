<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

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

