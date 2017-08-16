<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GlobalEditTerminalRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var \DateTime
     */
    private $effectiveDate = null;

    /**
     * @var string
     */
    private $targetValue = null;

    /**
     * @var TerminalChangeType
     */
    private $changeType = null;

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
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * @return string
     */
    public function getTargetValue()
    {
        return $this->targetValue;
    }

    /**
     * @return TerminalChangeType
     */
    public function getChangeType()
    {
        return $this->changeType;
    }


}

