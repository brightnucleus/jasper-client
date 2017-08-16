<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

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

