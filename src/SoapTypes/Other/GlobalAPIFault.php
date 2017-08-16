<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

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

