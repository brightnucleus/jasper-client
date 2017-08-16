<?php

namespace BrightNucleus\JasperClient\SoapTypes\AccountClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetAccountDetailsRequest extends JasperRequest
{

    /**
     * @var accountids
     */
    private $accountids = null;

    /**
     * @return accountids
     */
    public function getAccountids()
    {
        return $this->accountids;
    }


}

