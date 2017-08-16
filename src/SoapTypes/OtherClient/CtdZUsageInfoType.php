<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class CtdZUsageInfoType
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $dataUsage = null;

    /**
     * @var string
     */
    private $zoneName = null;

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
    public function getDataUsage()
    {
        return $this->dataUsage;
    }

    /**
     * @return string
     */
    public function getZoneName()
    {
        return $this->zoneName;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

