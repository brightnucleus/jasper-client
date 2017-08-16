<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

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

