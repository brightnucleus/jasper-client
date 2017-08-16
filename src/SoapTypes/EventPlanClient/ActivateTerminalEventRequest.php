<?php

namespace BrightNucleus\JasperClient\SoapTypes\EventPlanClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class ActivateTerminalEventRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $eventName = null;

    /**
     * @var \DateTime
     */
    private $effectiveDate = null;

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
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }


}

