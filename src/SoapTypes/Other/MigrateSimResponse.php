<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class MigrateSimResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $requestId = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

