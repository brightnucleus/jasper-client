<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class RegistrationInfo
{

    /**
     * @var string
     */
    private $imsi = null;

    /**
     * @var string
     */
    private $gtAddr = null;

    /**
     * @var bool
     */
    private $sgsn = null;

    /**
     * @var bool
     */
    private $vlr = null;

    /**
     * @var bool
     */
    private $msc = null;

    /**
     * @var \DateTime
     */
    private $eventDate = null;

    /**
     * @var string
     */
    private $carrierName = null;

    /**
     * @var bool
     */
    private $mme_s4sgsn = null;

    /**
     * @var string
     */
    private $hostName = null;

    /**
     * @return string
     */
    public function getImsi()
    {
        return $this->imsi;
    }

    /**
     * @return string
     */
    public function getGtAddr()
    {
        return $this->gtAddr;
    }

    /**
     * @return bool
     */
    public function getSgsn()
    {
        return $this->sgsn;
    }

    /**
     * @return bool
     */
    public function getVlr()
    {
        return $this->vlr;
    }

    /**
     * @return bool
     */
    public function getMsc()
    {
        return $this->msc;
    }

    /**
     * @return \DateTime
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * @return string
     */
    public function getCarrierName()
    {
        return $this->carrierName;
    }

    /**
     * @return bool
     */
    public function getMme_s4sgsn()
    {
        return $this->mme_s4sgsn;
    }

    /**
     * @return string
     */
    public function getHostName()
    {
        return $this->hostName;
    }


}

