<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class AddTerminalStatusResponse extends JasperResponse
{

    /**
     * @var SimTransferResponseType
     */
    private $addTerminalStatus = null;

    /**
     * @var string
     */
    private $newSimId = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return SimTransferResponseType
     */
    public function getAddTerminalStatus()
    {
        return $this->addTerminalStatus;
    }

    /**
     * @return string
     */
    public function getNewSimId()
    {
        return $this->newSimId;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

