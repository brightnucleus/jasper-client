<?php

namespace BrightNucleus\JasperClient\SoapTypes\EventPlanClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetTerminalEventsRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var \DateTime
     */
    private $since = null;

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }

    /**
     * @return \DateTime
     */
    public function getSince()
    {
        return $this->since;
    }


}

