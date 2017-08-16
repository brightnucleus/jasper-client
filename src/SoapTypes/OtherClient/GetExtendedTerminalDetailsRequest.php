<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetExtendedTerminalDetailsRequest extends JasperRequest
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

