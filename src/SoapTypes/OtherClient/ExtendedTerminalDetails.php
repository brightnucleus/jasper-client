<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class ExtendedTerminalDetails
{

    /**
     * @var ExtendedTerminalType
     */
    private $extendedTerminal = null;

    /**
     * @var SimTransferResponseType
     */
    private $getExtendedTerminalStatus = null;

    /**
     * @var string
     */
    private $simId = null;

    /**
     * @return ExtendedTerminalType
     */
    public function getExtendedTerminal()
    {
        return $this->extendedTerminal;
    }

    /**
     * @return SimTransferResponseType
     */
    public function getGetExtendedTerminalStatus()
    {
        return $this->getExtendedTerminalStatus;
    }

    /**
     * @return string
     */
    public function getSimId()
    {
        return $this->simId;
    }


}

