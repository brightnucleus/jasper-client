<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class KeyFieldType
{

    /**
     * @var KeyNameType
     */
    private $keyName = null;

    /**
     * @var string
     */
    private $keyValue = null;

    /**
     * @return KeyNameType
     */
    public function getKeyName()
    {
        return $this->keyName;
    }

    /**
     * @return string
     */
    public function getKeyValue()
    {
        return $this->keyValue;
    }


}

