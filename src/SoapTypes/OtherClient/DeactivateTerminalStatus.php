<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class DeactivateTerminalStatus
{

    /**
     * @var SimTransferResponseType
     */
    private $DeactivateTerminal = null;

    /**
     * @var string
     */
    private $simId = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return SimTransferResponseType
     */
    public function getDeactivateTerminal()
    {
        return $this->DeactivateTerminal;
    }

    /**
     * @return string
     */
    public function getSimId()
    {
        return $this->simId;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

