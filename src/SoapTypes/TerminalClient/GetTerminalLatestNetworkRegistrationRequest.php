<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetTerminalLatestNetworkRegistrationRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $imsi = null;

    /**
     * @return string
     */
    public function getImsi()
    {
        return $this->imsi;
    }


}

