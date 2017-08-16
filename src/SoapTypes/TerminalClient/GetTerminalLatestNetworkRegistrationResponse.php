<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetTerminalLatestNetworkRegistrationResponse extends JasperResponse
{

    /**
     * @var registrationEvents
     */
    private $registrationEvents = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return registrationEvents
     */
    public function getRegistrationEvents()
    {
        return $this->registrationEvents;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

