<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class SmsUsageDetails
{

    /**
     * @var SmsUsageDetailType
     */
    private $smsUsageDetail = null;

    /**
     * @return SmsUsageDetailType
     */
    public function getSmsUsageDetail()
    {
        return $this->smsUsageDetail;
    }


}

