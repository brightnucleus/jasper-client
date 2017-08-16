<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class UsageDetails
{

    /**
     * @var DataUsageDetailType
     */
    private $usageDetail = null;

    /**
     * @return DataUsageDetailType
     */
    public function getUsageDetail()
    {
        return $this->usageDetail;
    }


}

