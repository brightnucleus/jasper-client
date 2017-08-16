<?php

namespace BrightNucleus\JasperClient\SoapTypes\AlertClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetAlertDetailsResponse extends JasperResponse
{

    /**
     * @var alerts
     */
    private $alerts = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return alerts
     */
    public function getAlerts()
    {
        return $this->alerts;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

