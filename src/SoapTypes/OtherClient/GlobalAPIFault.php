<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class GlobalAPIFault
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

