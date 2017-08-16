<?php

namespace BrightNucleus\JasperClient\SoapTypes\BillingClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetTerminalUsageDataDetailsResponse extends JasperResponse
{

    /**
     * @var usageDetails
     */
    private $usageDetails = null;

    /**
     * @var int
     */
    private $totalPages = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return usageDetails
     */
    public function getUsageDetails()
    {
        return $this->usageDetails;
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

