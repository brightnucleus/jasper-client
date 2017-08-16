<?php

namespace BrightNucleus\JasperClient\SoapTypes\EventPlanClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetTerminalEventsResponse extends JasperResponse
{

    /**
     * @var terminalEvents
     */
    private $terminalEvents = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return terminalEvents
     */
    public function getTerminalEvents()
    {
        return $this->terminalEvents;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

