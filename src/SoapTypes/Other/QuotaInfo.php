<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

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

