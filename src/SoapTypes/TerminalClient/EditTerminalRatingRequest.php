<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class EditTerminalRatingRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var \DateTime
     */
    private $termStartDate = null;

    /**
     * @var \DateTime
     */
    private $termEndDate = null;

    /**
     * @var string
     */
    private $renewalMode = null;

    /**
     * @var string
     */
    private $renewalRatePlan = null;

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }

    /**
     * @return \DateTime
     */
    public function getTermStartDate()
    {
        return $this->termStartDate;
    }

    /**
     * @return \DateTime
     */
    public function getTermEndDate()
    {
        return $this->termEndDate;
    }

    /**
     * @return string
     */
    public function getRenewalMode()
    {
        return $this->renewalMode;
    }

    /**
     * @return string
     */
    public function getRenewalRatePlan()
    {
        return $this->renewalRatePlan;
    }


}

