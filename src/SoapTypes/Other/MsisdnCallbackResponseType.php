<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class MsisdnCallbackResponseType
{

    /**
     * @var int
     */
    private $msisdnCallbackNotificationId = null;

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $msisdn = null;

    /**
     * @var string
     */
    private $status = null;

    /**
     * @var string
     */
    private $correlationId = null;

    /**
     * @var \DateTime
     */
    private $dateSent = null;

    /**
     * @return int
     */
    public function getMsisdnCallbackNotificationId()
    {
        return $this->msisdnCallbackNotificationId;
    }

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }

    /**
     * @return string
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getCorrelationId()
    {
        return $this->correlationId;
    }

    /**
     * @return \DateTime
     */
    public function getDateSent()
    {
        return $this->dateSent;
    }


}

