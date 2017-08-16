<?php

namespace BrightNucleus\JasperClient\SoapTypes\EventPlanClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetAvailableEventsResponse extends JasperResponse
{

    /**
     * @var AvailableEvents
     */
    private $AvailableEvents = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return AvailableEvents
     */
    public function getAvailableEvents()
    {
        return $this->AvailableEvents;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

