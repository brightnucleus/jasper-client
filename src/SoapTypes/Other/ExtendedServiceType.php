<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class ExtendedServiceType
{

    /**
     * @var FeatureType
     */
    private $extendedServiceFeature = null;

    /**
     * @return FeatureType
     */
    public function getExtendedServiceFeature()
    {
        return $this->extendedServiceFeature;
    }


}

