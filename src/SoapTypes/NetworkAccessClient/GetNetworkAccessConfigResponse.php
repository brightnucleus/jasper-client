<?php

namespace BrightNucleus\JasperClient\SoapTypes\NetworkAccessClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetNetworkAccessConfigResponse extends JasperResponse
{

    /**
     * @var nacIds
     */
    private $nacIds = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return nacIds
     */
    public function getNacIds()
    {
        return $this->nacIds;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

