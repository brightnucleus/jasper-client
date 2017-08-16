<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class CancelGlobalTransferSimRequest extends JasperRequest
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

