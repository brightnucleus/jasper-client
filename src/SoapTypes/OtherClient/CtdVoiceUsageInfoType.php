<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class CtdVoiceUsageInfoType
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
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

