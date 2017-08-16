<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetDeviceSubscriptionStatusRequest extends JasperRequest
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

