<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetTerminalDetailsRequest extends JasperRequest
{

    /**
     * @var iccids
     */
    private $iccids = null;

    /**
     * @return iccids
     */
    public function getIccids()
    {
        return $this->iccids;
    }


}

