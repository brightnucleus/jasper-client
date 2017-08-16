<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

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

