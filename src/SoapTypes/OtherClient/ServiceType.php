<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class ServiceType
{

    /**
     * @var DataServiceType
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
     * @var InternationalServiceType
     */
    private $internationalServices = null;

    /**
     * @var RoamingZonesType
     */
    private $roamingZones = null;

    /**
     * @var ExtendedServiceType
     */
    private $extendedServices = null;

    /**
     * @return DataServiceType
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

    /**
     * @return InternationalServiceType
     */
    public function getInternationalServices()
    {
        return $this->internationalServices;
    }

    /**
     * @return RoamingZonesType
     */
    public function getRoamingZones()
    {
        return $this->roamingZones;
    }

    /**
     * @return ExtendedServiceType
     */
    public function getExtendedServices()
    {
        return $this->extendedServices;
    }


}

