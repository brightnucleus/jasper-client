<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class DeactivateTerminalResponse extends JasperResponse
{

    /**
     * @var DeactivateTerminalStatus
     */
    private $DeactivateTerminalStatus = null;

    /**
     * @return DeactivateTerminalStatus
     */
    public function getDeactivateTerminalStatus()
    {
        return $this->DeactivateTerminalStatus;
    }


}

