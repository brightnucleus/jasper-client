<?php

namespace BrightNucleus\JasperClient\SoapTypes\GlobalSimTransferClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetGlobalSimTransferStatusRequest extends JasperRequest
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

