<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetTrackedTerminalsResponse extends JasperResponse
{

    /**
     * @var trackedTerminals
     */
    private $trackedTerminals = null;

    /**
     * @return trackedTerminals
     */
    public function getTrackedTerminals()
    {
        return $this->trackedTerminals;
    }


}

