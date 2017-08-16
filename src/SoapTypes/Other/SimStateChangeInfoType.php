<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class SimStateChangeInfoType
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $previousState = null;

    /**
     * @var string
     */
    private $currentState = null;

    /**
     * @var \DateTime
     */
    private $dateChanged = null;

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
    public function getPreviousState()
    {
        return $this->previousState;
    }

    /**
     * @return string
     */
    public function getCurrentState()
    {
        return $this->currentState;
    }

    /**
     * @return \DateTime
     */
    public function getDateChanged()
    {
        return $this->dateChanged;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

