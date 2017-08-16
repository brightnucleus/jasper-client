<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetTerminalsByMsisdnRequest extends JasperRequest
{

    /**
     * @var msisdns
     */
    private $msisdns = null;

    /**
     * @return msisdns
     */
    public function getMsisdns()
    {
        return $this->msisdns;
    }


}

