<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class VoiceMailServiceType
{

    /**
     * @var VoiceMailFeatureType
     */
    private $voiceMailFeatures = null;

    /**
     * @return VoiceMailFeatureType
     */
    public function getVoiceMailFeatures()
    {
        return $this->voiceMailFeatures;
    }


}

