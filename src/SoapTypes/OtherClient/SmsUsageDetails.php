<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

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

