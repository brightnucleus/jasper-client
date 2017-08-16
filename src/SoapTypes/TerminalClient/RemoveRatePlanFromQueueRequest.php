<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class RemoveRatePlanFromQueueRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var int
     */
    private $queuePosition = null;

    /**
     * @var string
     */
    private $ratePlan = null;

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }

    /**
     * @return int
     */
    public function getQueuePosition()
    {
        return $this->queuePosition;
    }

    /**
     * @return string
     */
    public function getRatePlan()
    {
        return $this->ratePlan;
    }


}

