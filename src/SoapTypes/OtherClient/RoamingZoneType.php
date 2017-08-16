<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class RoamingZoneType
{

    /**
     * @var string
     */
    private $zoneName = null;

    /**
     * @var RoamDataServiceType
     */
    private $dataServices = null;

    /**
     * @var VoiceServiceType
     */
    private $voiceServices = null;

    /**
     * @var SmsServiceType
     */
    private $smsServices = null;

    /**
     * @var VoiceMailServiceType
     */
    private $voiceMailServices = null;

    /**
     * @var MmsServiceType
     */
    private $mmsServices = null;

    /**
     * @return string
     */
    public function getZoneName()
    {
        return $this->zoneName;
    }

    /**
     * @return RoamDataServiceType
     */
    public function getDataServices()
    {
        return $this->dataServices;
    }

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
     * @return VoiceMailServiceType
     */
    public function getVoiceMailServices()
    {
        return $this->voiceMailServices;
    }

    /**
     * @return MmsServiceType
     */
    public function getMmsServices()
    {
        return $this->mmsServices;
    }


}

