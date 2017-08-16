<?php

namespace BrightNucleus\JasperClient\SoapTypes\AccountClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetAccountsRequest extends JasperRequest
{

    /**
     * @var int
     */
    private $pageNumber = null;

    /**
     * Instantiate a GetAccountsRequest object.
     *
     * @param int $pageNumber Page number to get.
     */
    public function __construct($pageNumber)
    {
        $this->pageNumber = $pageNumber;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }
}

