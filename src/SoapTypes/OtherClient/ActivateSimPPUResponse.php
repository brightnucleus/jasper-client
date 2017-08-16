<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class ActivateSimPPUResponse extends JasperResponse
{

    /**
     * @var ActivateSimResult
     */
    private $Activate_SIM_PPUResult = null;

    /**
     * @return ActivateSimResult
     */
    public function getActivate_SIM_PPUResult()
    {
        return $this->Activate_SIM_PPUResult;
    }


}

