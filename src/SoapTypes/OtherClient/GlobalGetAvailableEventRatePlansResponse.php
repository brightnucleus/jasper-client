<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GlobalGetAvailableEventRatePlansResponse extends JasperResponse
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

