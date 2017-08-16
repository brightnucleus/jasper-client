<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetProvisioningStatusResponse extends JasperResponse
{

    /**
     * @var status
     */
    private $status = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

