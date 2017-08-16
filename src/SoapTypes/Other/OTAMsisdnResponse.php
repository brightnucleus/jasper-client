<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class OTAMsisdnResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $status = null;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }


}

