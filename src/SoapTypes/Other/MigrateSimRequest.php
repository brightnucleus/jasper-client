<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class MigrateSimRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $newServiceProvider = null;

    /**
     * @var int
     */
    private $newAccountId = null;

    /**
     * @var int
     */
    private $ratePlanId = null;

    /**
     * @var int
     */
    private $communicationPlanId = null;

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }

    /**
     * @return string
     */
    public function getNewServiceProvider()
    {
        return $this->newServiceProvider;
    }

    /**
     * @return int
     */
    public function getNewAccountId()
    {
        return $this->newAccountId;
    }

    /**
     * @return int
     */
    public function getRatePlanId()
    {
        return $this->ratePlanId;
    }

    /**
     * @return int
     */
    public function getCommunicationPlanId()
    {
        return $this->communicationPlanId;
    }


}

