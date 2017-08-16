<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GlobalGetTerminalLatestRegistrationResponse extends JasperResponse
{

    /**
     * @var AccountResponse
     */
    private $AccountResponse = null;

    /**
     * @return AccountResponse
     */
    public function getAccountResponse()
    {
        return $this->AccountResponse;
    }


}

