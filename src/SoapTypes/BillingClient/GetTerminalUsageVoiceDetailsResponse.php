<?php

namespace BrightNucleus\JasperClient\SoapTypes\BillingClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetTerminalUsageVoiceDetailsResponse extends JasperResponse
{

    /**
     * @var voiceUsageDetails
     */
    private $voiceUsageDetails = null;

    /**
     * @var int
     */
    private $totalPages = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return voiceUsageDetails
     */
    public function getVoiceUsageDetails()
    {
        return $this->voiceUsageDetails;
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

