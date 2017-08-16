<?php

namespace BrightNucleus\JasperClient\SoapTypes\AccountClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class CreateAccountResponse extends JasperResponse
{

    /**
     * @var int
     */
    private $accountId = null;

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }


}

