<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class DeviceFeatureType
{

    /**
     * @var string
     */
    private $imei = null;

    /**
     * @var FeatureType
     */
    private $deviceFeature = null;

    /**
     * @return string
     */
    public function getImei()
    {
        return $this->imei;
    }

    /**
     * @return FeatureType
     */
    public function getDeviceFeature()
    {
        return $this->deviceFeature;
    }


}

