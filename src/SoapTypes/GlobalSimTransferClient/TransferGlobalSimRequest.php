<?php

namespace BrightNucleus\JasperClient\SoapTypes\GlobalSimTransferClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class TransferGlobalSimRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $primaryIccid = null;

    /**
     * @var string
     */
    private $targetPartnerName = null;

    /**
     * @var string
     */
    private $globalAllianceName = null;

    /**
     * @var GlobalSimTransferType
     */
    private $globalSimTransferType = null;

    /**
     * @var anyURI
     */
    private $callbackNotificationURL = null;

    /**
     * @return string
     */
    public function getPrimaryIccid()
    {
        return $this->primaryIccid;
    }

    /**
     * @return string
     */
    public function getTargetPartnerName()
    {
        return $this->targetPartnerName;
    }

    /**
     * @return string
     */
    public function getGlobalAllianceName()
    {
        return $this->globalAllianceName;
    }

    /**
     * @return GlobalSimTransferType
     */
    public function getGlobalSimTransferType()
    {
        return $this->globalSimTransferType;
    }

    /**
     * @return anyURI
     */
    public function getCallbackNotificationURL()
    {
        return $this->callbackNotificationURL;
    }


}

