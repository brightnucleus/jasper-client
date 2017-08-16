<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class SimFieldChangeType
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $oldValue = null;

    /**
     * @var string
     */
    private $newValue = null;

    /**
     * @var string
     */
    private $fieldName = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }

    /**
     * @return string
     */
    public function getOldValue()
    {
        return $this->oldValue;
    }

    /**
     * @return string
     */
    public function getNewValue()
    {
        return $this->newValue;
    }

    /**
     * @return string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

