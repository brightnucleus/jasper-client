<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetDeviceSubscriptionStatusResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $subscriptionStatusValue = null;

    /**
     * @var \DateTime
     */
    private $lastSubscriptionSuspensionStartDate = null;

    /**
     * @var \DateTime
     */
    private $lastSubscriptionSuspensionEndDate = null;

    /**
     * @var \DateTime
     */
    private $nextAllowedSuspensionDate = null;

    /**
     * @var int
     */
    private $remainingSuspensions = null;

    /**
     * @var int
     */
    private $remainingSuspensionDays = null;

    /**
     * @return string
     */
    public function getSubscriptionStatusValue()
    {
        return $this->subscriptionStatusValue;
    }

    /**
     * @return \DateTime
     */
    public function getLastSubscriptionSuspensionStartDate()
    {
        return $this->lastSubscriptionSuspensionStartDate;
    }

    /**
     * @return \DateTime
     */
    public function getLastSubscriptionSuspensionEndDate()
    {
        return $this->lastSubscriptionSuspensionEndDate;
    }

    /**
     * @return \DateTime
     */
    public function getNextAllowedSuspensionDate()
    {
        return $this->nextAllowedSuspensionDate;
    }

    /**
     * @return int
     */
    public function getRemainingSuspensions()
    {
        return $this->remainingSuspensions;
    }

    /**
     * @return int
     */
    public function getRemainingSuspensionDays()
    {
        return $this->remainingSuspensionDays;
    }


}

