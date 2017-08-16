<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class CdrInfoType
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $causeRecordClosing = null;

    /**
     * @var string
     */
    private $apn = null;

    /**
     * @var int
     */
    private $bytesUplink = null;

    /**
     * @var int
     */
    private $bytesDownlink = null;

    /**
     * @var float
     */
    private $usage = null;

    /**
     * @var float
     */
    private $roundedUsage = null;

    /**
     * @var string
     */
    private $servedPdpAddr = null;

    /**
     * @var int
     */
    private $duration = null;

    /**
     * @var \DateTime
     */
    private $recordOpenTime = null;

    /**
     * @var \DateTime
     */
    private $recordCloseTime = null;

    /**
     * @var string
     */
    private $carrier = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

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
    public function getCauseRecordClosing()
    {
        return $this->causeRecordClosing;
    }

    /**
     * @return string
     */
    public function getApn()
    {
        return $this->apn;
    }

    /**
     * @return int
     */
    public function getBytesUplink()
    {
        return $this->bytesUplink;
    }

    /**
     * @return int
     */
    public function getBytesDownlink()
    {
        return $this->bytesDownlink;
    }

    /**
     * @return float
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * @return float
     */
    public function getRoundedUsage()
    {
        return $this->roundedUsage;
    }

    /**
     * @return string
     */
    public function getServedPdpAddr()
    {
        return $this->servedPdpAddr;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @return \DateTime
     */
    public function getRecordOpenTime()
    {
        return $this->recordOpenTime;
    }

    /**
     * @return \DateTime
     */
    public function getRecordCloseTime()
    {
        return $this->recordCloseTime;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

