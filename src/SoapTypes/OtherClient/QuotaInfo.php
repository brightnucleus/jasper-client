<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class QuotaInfo
{

    /**
     * @var QuotaInfoType
     */
    private $quota = null;

    /**
     * @return QuotaInfoType
     */
    public function getQuota()
    {
        return $this->quota;
    }


}

