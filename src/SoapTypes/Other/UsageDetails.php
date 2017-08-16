<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

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

