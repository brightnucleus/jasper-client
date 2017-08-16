<?php

namespace BrightNucleus\JasperClient\SoapTypes\AlertClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetAlertsResponse extends JasperResponse
{

    /**
     * @var alertIds
     */
    private $alertIds = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return alertIds
     */
    public function getAlertIds()
    {
        return $this->alertIds;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

