<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class TerminalAuditTrailType
{

    /**
     * @var string
     */
    private $field = null;

    /**
     * @var string
     */
    private $priorValue = null;

    /**
     * @var string
     */
    private $value = null;

    /**
     * @var \DateTime
     */
    private $effectiveDate = null;

    /**
     * @var string
     */
    private $status = null;

    /**
     * @var string
     */
    private $userName = null;

    /**
     * @var string
     */
    private $delegatedUser = null;

    /**
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @return string
     */
    public function getPriorValue()
    {
        return $this->priorValue;
    }

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
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @return string
     */
    public function getDelegatedUser()
    {
        return $this->delegatedUser;
    }


}

