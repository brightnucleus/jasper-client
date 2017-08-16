<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetLineInformationRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $IMSI = null;

    /**
     * @return string
     */
    public function getIMSI()
    {
        return $this->IMSI;
    }


}

