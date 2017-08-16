<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class CtdVoiceZUsageInfoType
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $ctdVoiceMoUsage = null;

    /**
     * @var string
     */
    private $ctdVoiceMtUsage = null;

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
    public function getCtdVoiceMoUsage()
    {
        return $this->ctdVoiceMoUsage;
    }

    /**
     * @return string
     */
    public function getCtdVoiceMtUsage()
    {
        return $this->ctdVoiceMtUsage;
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

