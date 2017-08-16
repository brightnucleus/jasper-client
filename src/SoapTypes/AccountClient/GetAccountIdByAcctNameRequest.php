<?php

namespace BrightNucleus\JasperClient\SoapTypes\AccountClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetAccountIdByAcctNameRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $accountName = null;

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }


}

