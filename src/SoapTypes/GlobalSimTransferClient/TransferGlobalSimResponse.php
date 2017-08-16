<?php

namespace BrightNucleus\JasperClient\SoapTypes\GlobalSimTransferClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class TransferGlobalSimResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $globalSimTransferId = null;

    /**
     * @var string
     */
    private $primaryIccid = null;

    /**
     * @var GlobalSimSubscriptionInfoType
     */
    private $targetSimSubscriptionInfo = null;

    /**
     * @return string
     */
    public function getGlobalSimTransferId()
    {
        return $this->globalSimTransferId;
    }

    /**
     * @return string
     */
    public function getPrimaryIccid()
    {
        return $this->primaryIccid;
    }

    /**
     * @return GlobalSimSubscriptionInfoType
     */
    public function getTargetSimSubscriptionInfo()
    {
        return $this->targetSimSubscriptionInfo;
    }


}

