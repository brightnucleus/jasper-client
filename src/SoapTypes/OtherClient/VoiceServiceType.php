<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class VoiceServiceType
{

    /**
     * @var integer
     */
    private $voiceQuota = null;

    /**
     * @var VoiceQuotaUnitType
     */
    private $voiceQuotaUnit = null;

    /**
     * @var string
     */
    private $voiceQOS = null;

    /**
     * @var VoiceFeatureType
     */
    private $voiceFeatures = null;

    /**
     * @return integer
     */
    public function getVoiceQuota()
    {
        return $this->voiceQuota;
    }

    /**
     * @return VoiceQuotaUnitType
     */
    public function getVoiceQuotaUnit()
    {
        return $this->voiceQuotaUnit;
    }

    /**
     * @return string
     */
    public function getVoiceQOS()
    {
        return $this->voiceQOS;
    }

    /**
     * @return VoiceFeatureType
     */
    public function getVoiceFeatures()
    {
        return $this->voiceFeatures;
    }


}

