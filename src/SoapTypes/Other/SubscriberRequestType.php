<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class SubscriberRequestType
{

    /**
     * @var integer
     */
    private $priority = null;

    /**
     * @var \DateTime
     */
    private $effectiveDate = null;

    /**
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }


}

