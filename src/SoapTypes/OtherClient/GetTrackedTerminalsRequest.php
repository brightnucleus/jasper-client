<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetTrackedTerminalsRequest extends JasperRequest
{

    /**
     * @var \DateTime
     */
    private $sinceDateTime = null;

    /**
     * @return \DateTime
     */
    public function getSinceDateTime()
    {
        return $this->sinceDateTime;
    }


}

