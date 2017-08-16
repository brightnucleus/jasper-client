<?php

namespace BrightNucleus\JasperClient\SoapTypes\BillingClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetTerminalUsageSmsDetailsResponse extends JasperResponse
{

    /**
     * @var smsUsageDetails
     */
    private $smsUsageDetails = null;

    /**
     * @var int
     */
    private $totalPages = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return smsUsageDetails
     */
    public function getSmsUsageDetails()
    {
        return $this->smsUsageDetails;
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

