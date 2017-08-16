<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetGlobalTransferSimStatusRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $primaryIccid = null;

    /**
     * @return string
     */
    public function getPrimaryIccid()
    {
        return $this->primaryIccid;
    }


}

