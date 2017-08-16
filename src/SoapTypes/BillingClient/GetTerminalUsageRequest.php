<?php

namespace BrightNucleus\JasperClient\SoapTypes\BillingClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetTerminalUsageRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var \DateTime
     */
    private $cycleStartDate = null;

    /**
     * Instantiate a GetTerminalUsageRequest object.
     *
     * @since 0.1.0
     *
     * @param string             $iccid
     * @param \DateTimeInterface $cycleStartDate
     */
    public function __construct(string $iccid, \DateTimeInterface $cycleStartDate = null)
    {
        $this->iccid          = $iccid;
        $this->cycleStartDate = $cycleStartDate ?: new \DateTimeImmutable('first day of this month');
    }

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
    public function getCycleStartDate()
    {
        return $this->cycleStartDate;
    }


}

