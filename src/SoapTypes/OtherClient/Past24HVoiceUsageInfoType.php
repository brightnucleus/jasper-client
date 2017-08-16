<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class Past24HVoiceUsageInfoType
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $dailyVoiceMoUsage = null;

    /**
     * @var string
     */
    private $dailyVoiceMtUsage = null;

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
    public function getDailyVoiceMoUsage()
    {
        return $this->dailyVoiceMoUsage;
    }

    /**
     * @return string
     */
    public function getDailyVoiceMtUsage()
    {
        return $this->dailyVoiceMtUsage;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

