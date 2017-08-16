<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class FeatureType
{

    /**
     * @var string
     */
    private $name = null;

    /**
     * @var string
     */
    private $value = null;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }


}

