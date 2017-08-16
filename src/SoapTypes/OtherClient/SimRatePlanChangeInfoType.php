<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class SimRatePlanChangeInfoType
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $oldRatePlanName = null;

    /**
     * @var string
     */
    private $newRatePlanName = null;

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
    public function getOldRatePlanName()
    {
        return $this->oldRatePlanName;
    }

    /**
     * @return string
     */
    public function getNewRatePlanName()
    {
        return $this->newRatePlanName;
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

