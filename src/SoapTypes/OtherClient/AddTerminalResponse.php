<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class AddTerminalResponse extends JasperResponse
{

    /**
     * @var AddTerminalStatusResponse
     */
    private $AddTerminalStatusResponse = null;

    /**
     * @return AddTerminalStatusResponse
     */
    public function getAddTerminalStatusResponse()
    {
        return $this->AddTerminalStatusResponse;
    }


}

