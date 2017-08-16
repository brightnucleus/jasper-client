<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class InternationalServiceType
{

    /**
     * @var VoiceServiceType
     */
    private $voiceServices = null;

    /**
     * @var SmsServiceType
     */
    private $smsServices = null;

    /**
     * @var MmsServiceType
     */
    private $mmsServices = null;

    /**
     * @return VoiceServiceType
     */
    public function getVoiceServices()
    {
        return $this->voiceServices;
    }

    /**
     * @return SmsServiceType
     */
    public function getSmsServices()
    {
        return $this->smsServices;
    }

    /**
     * @return MmsServiceType
     */
    public function getMmsServices()
    {
        return $this->mmsServices;
    }


}

