<?php

namespace BrightNucleus\JasperClient\SoapTypes\EventPlanClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetAvailableEventsRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }


}

