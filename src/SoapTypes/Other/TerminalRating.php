<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class TerminalRating
{

    /**
     * @var string
     */
    private $ratePlanName = null;

    /**
     * @var int
     */
    private $queuePosition = null;

    /**
     * @var \DateTime
     */
    private $expirationDate = null;

    /**
     * @var int
     */
    private $termLength = null;

    /**
     * @var float
     */
    private $dataRemaining = null;

    /**
     * @return string
     */
    public function getRatePlanName()
    {
        return $this->ratePlanName;
    }

    /**
     * @return int
     */
    public function getQueuePosition()
    {
        return $this->queuePosition;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @return int
     */
    public function getTermLength()
    {
        return $this->termLength;
    }

    /**
     * @return float
     */
    public function getDataRemaining()
    {
        return $this->dataRemaining;
    }


}

