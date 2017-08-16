<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class AvailableEvent
{

    /**
     * @var string
     */
    private $EventName = null;

    /**
     * @var int
     */
    private $Version = null;

    /**
     * @var int
     */
    private $Term = null;

    /**
     * @var float
     */
    private $Price = null;

    /**
     * @var float
     */
    private $IncludedData = null;

    /**
     * @var float
     */
    private $DataOverageRate = null;

    /**
     * @return string
     */
    public function getEventName()
    {
        return $this->EventName;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @return int
     */
    public function getTerm()
    {
        return $this->Term;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @return float
     */
    public function getIncludedData()
    {
        return $this->IncludedData;
    }

    /**
     * @return float
     */
    public function getDataOverageRate()
    {
        return $this->DataOverageRate;
    }


}

