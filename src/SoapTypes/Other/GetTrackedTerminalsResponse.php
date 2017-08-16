<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

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

