<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GlobalGetTerminalLatestRegistrationRequest extends JasperRequest
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

