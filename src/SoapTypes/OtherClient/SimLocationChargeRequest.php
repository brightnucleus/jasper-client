<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class SimLocationChargeRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }


}

