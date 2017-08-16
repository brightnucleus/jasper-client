<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class AddCustomSubscriberChargeRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $chargetype = null;

    /**
     * @var string
     */
    private $SocOrderID = null;

    /**
     * @var string
     */
    private $SessionID = null;

    /**
     * @var string
     */
    private $SocCode = null;

    /**
     * @var string
     */
    private $TLGBan = null;

    /**
     * @var \DateTime
     */
    private $PlanActivationDate = null;

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
    public function getChargetype()
    {
        return $this->chargetype;
    }

    /**
     * @return string
     */
    public function getSocOrderID()
    {
        return $this->SocOrderID;
    }

    /**
     * @return string
     */
    public function getSessionID()
    {
        return $this->SessionID;
    }

    /**
     * @return string
     */
    public function getSocCode()
    {
        return $this->SocCode;
    }

    /**
     * @return string
     */
    public function getTLGBan()
    {
        return $this->TLGBan;
    }

    /**
     * @return \DateTime
     */
    public function getPlanActivationDate()
    {
        return $this->PlanActivationDate;
    }


}

