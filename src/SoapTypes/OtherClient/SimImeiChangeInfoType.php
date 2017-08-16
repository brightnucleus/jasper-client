<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class SimImeiChangeInfoType
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $previousImei = null;

    /**
     * @var string
     */
    private $currentImei = null;

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
    public function getPreviousImei()
    {
        return $this->previousImei;
    }

    /**
     * @return string
     */
    public function getCurrentImei()
    {
        return $this->currentImei;
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

