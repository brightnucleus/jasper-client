<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetTerminalsByImsiRequest extends JasperRequest
{

    /**
     * @var imsi
     */
    private $imsi = null;

    /**
     * @return imsi
     */
    public function getImsi()
    {
        return $this->imsi;
    }


}

