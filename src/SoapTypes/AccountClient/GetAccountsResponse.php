<?php

namespace BrightNucleus\JasperClient\SoapTypes\AccountClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetAccountsResponse extends JasperResponse
{

    /**
     * @var accountIds
     */
    private $accountIds = null;

    /**
     * @var int
     */
    private $totalPages = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return accountIds
     */
    public function getAccountIds()
    {
        return $this->accountIds;
    }

    /**
     * @return int
     */
    public function getTotalPages()
    {
        return $this->totalPages;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

