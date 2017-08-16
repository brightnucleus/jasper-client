<?php

namespace BrightNucleus\JasperClient\SoapTypes\BillingClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetTerminalUsageVoiceDetailsRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var \DateTimeInterface
     */
    private $cycleStartDate = null;

    /**
     * @var int
     */
    private $pageNumber = null;

    /**
     * Instantiate a GetTerminalUsageVoiceDetailsRequest object.
     *
     * @since 0.1.0
     *
     * @param string             $iccid
     * @param \DateTimeInterface $cycleStartDate
     * @param int                $pageNumber
     */
    public function __construct(string $iccid, \DateTimeInterface $cycleStartDate = null, $pageNumber = 1)
    {
        $this->iccid          = $iccid;
        $this->cycleStartDate = $cycleStartDate ?: new \DateTimeImmutable('first day of this month');
        $this->pageNumber     = $pageNumber;
    }

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCycleStartDate()
    {
        return $this->cycleStartDate;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }


}

