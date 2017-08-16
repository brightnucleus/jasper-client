<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class CtdCsdZUsageInfoType
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $ctdCsdMoUsage = null;

    /**
     * @var string
     */
    private $ctdCsdMtUsage = null;

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
    public function getCtdCsdMoUsage()
    {
        return $this->ctdCsdMoUsage;
    }

    /**
     * @return string
     */
    public function getCtdCsdMtUsage()
    {
        return $this->ctdCsdMtUsage;
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

