<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class AdditionalPolicyType
{

    /**
     * @var Name
     */
    private $Name = null;

    /**
     * @var Value
     */
    private $Value = null;

    /**
     * @return Name
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @return Value
     */
    public function getValue()
    {
        return $this->Value;
    }


}

