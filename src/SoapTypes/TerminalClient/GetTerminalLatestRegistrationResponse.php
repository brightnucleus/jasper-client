<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetTerminalLatestRegistrationResponse extends JasperResponse
{

    /**
     * @var registrationInfo
     */
    private $registrationInfo = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return registrationInfo
     */
    public function getRegistrationInfo()
    {
        return $this->registrationInfo;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

