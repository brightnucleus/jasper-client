<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class OTAPlmnRefreshResponseType
{

    /**
     * @var int
     */
    private $otaCallbackNotificationId = null;

    /**
     * @var string
     */
    private $otaMessageType = null;

    /**
     * @var string
     */
    private $status = null;

    /**
     * @var int
     */
    private $simId = null;

    /**
     * @var string
     */
    private $sentTo = null;

    /**
     * @var \DateTime
     */
    private $dateSent = null;

    /**
     * @return int
     */
    public function getOtaCallbackNotificationId()
    {
        return $this->otaCallbackNotificationId;
    }

    /**
     * @return string
     */
    public function getOtaMessageType()
    {
        return $this->otaMessageType;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getSimId()
    {
        return $this->simId;
    }

    /**
     * @return string
     */
    public function getSentTo()
    {
        return $this->sentTo;
    }

    /**
     * @return \DateTime
     */
    public function getDateSent()
    {
        return $this->dateSent;
    }


}

