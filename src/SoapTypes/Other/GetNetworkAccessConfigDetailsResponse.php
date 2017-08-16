<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetNetworkAccessConfigDetailsResponse extends JasperResponse
{

    /**
     * @var nacs
     */
    private $nacs = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return nacs
     */
    public function getNacs()
    {
        return $this->nacs;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

