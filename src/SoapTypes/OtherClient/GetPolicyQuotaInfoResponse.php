<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetPolicyQuotaInfoResponse extends JasperResponse
{

    /**
     * @var quotaInfo
     */
    private $quotaInfo = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return quotaInfo
     */
    public function getQuotaInfo()
    {
        return $this->quotaInfo;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

