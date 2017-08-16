<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class SetSubscriberPolicyStateRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $imsi = null;

    /**
     * @var string
     */
    private $key = null;

    /**
     * @var string
     */
    private $value = null;

    /**
     * @return string
     */
    public function getImsi()
    {
        return $this->imsi;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }


}

