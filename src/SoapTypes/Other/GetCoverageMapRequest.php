<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetCoverageMapRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $address = null;

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }


}

