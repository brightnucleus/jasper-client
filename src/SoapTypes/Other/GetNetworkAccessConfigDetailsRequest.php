<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetNetworkAccessConfigDetailsRequest extends JasperRequest
{

    /**
     * @var nacIds
     */
    private $nacIds = null;

    /**
     * @return nacIds
     */
    public function getNacIds()
    {
        return $this->nacIds;
    }


}

