<?php

namespace BrightNucleus\JasperClient\SoapTypes\AccountClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class EditAccountRequest extends JasperRequest
{

    /**
     * @var AccountType
     */
    private $account = null;

    /**
     * @return AccountType
     */
    public function getAccount()
    {
        return $this->account;
    }


}

