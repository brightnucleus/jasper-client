<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class DeactivateTerminalRequest extends JasperRequest
{

    /**
     * @var DeactivateTerminal
     */
    private $DeactivateTerminal = null;

    /**
     * @return DeactivateTerminal
     */
    public function getDeactivateTerminal()
    {
        return $this->DeactivateTerminal;
    }


}

