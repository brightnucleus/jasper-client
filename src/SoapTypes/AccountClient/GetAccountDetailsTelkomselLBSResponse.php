<?php

namespace BrightNucleus\JasperClient\SoapTypes\AccountClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetAccountDetailsTelkomselLBSResponse extends JasperResponse
{

    /**
     * @var accounts
     */
    private $accounts = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return accounts
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

