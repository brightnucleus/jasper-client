<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class SessionInfoType
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $ipAddress = null;

    /**
     * @var string
     */
    private $ipv6Address = null;

    /**
     * @var \DateTime
     */
    private $dateSessionStarted = null;

    /**
     * @var \DateTime
     */
    private $dateSessionEnded = null;

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
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @return string
     */
    public function getIpv6Address()
    {
        return $this->ipv6Address;
    }

    /**
     * @return \DateTime
     */
    public function getDateSessionStarted()
    {
        return $this->dateSessionStarted;
    }

    /**
     * @return \DateTime
     */
    public function getDateSessionEnded()
    {
        return $this->dateSessionEnded;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

