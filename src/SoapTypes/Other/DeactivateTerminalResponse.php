<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

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

