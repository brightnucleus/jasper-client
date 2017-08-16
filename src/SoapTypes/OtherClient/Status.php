<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class Status
{

    /**
     * @var string
     */
    private $value = null;

    /**
     * @var \DateTime
     */
    private $timestamp = null;

    /**
     * @var string
     */
    private $failureReason = null;

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @return string
     */
    public function getFailureReason()
    {
        return $this->failureReason;
    }


}

