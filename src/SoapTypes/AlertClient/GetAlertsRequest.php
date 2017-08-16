<?php

namespace BrightNucleus\JasperClient\SoapTypes\AlertClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetAlertsRequest extends JasperRequest
{

    /**
     * @var \DateTime
     */
    private $since = null;

    /**
     * @return \DateTime
     */
    public function getSince()
    {
        return $this->since;
    }


}

