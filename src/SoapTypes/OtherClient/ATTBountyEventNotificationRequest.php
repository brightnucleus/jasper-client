<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class ATTBountyEventNotificationRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var int
     */
    private $action = null;

    /**
     * @var int
     */
    private $socType = null;

    /**
     * @var string
     */
    private $tlgban = null;

    /**
     * @var string
     */
    private $SocOrderId = null;

    /**
     * @var string
     */
    private $SocCode = null;

    /**
     * @var string
     */
    private $sessionId = null;

    /**
     * @var string
     */
    private $startDate = null;

    /**
     * @var bool
     */
    private $autoRenewStatus = null;

    /**
     * @var string
     */
    private $replacementIccid = null;

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }

    /**
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return int
     */
    public function getSocType()
    {
        return $this->socType;
    }

    /**
     * @return string
     */
    public function getTlgban()
    {
        return $this->tlgban;
    }

    /**
     * @return string
     */
    public function getSocOrderId()
    {
        return $this->SocOrderId;
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
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @return bool
     */
    public function getAutoRenewStatus()
    {
        return $this->autoRenewStatus;
    }

    /**
     * @return string
     */
    public function getReplacementIccid()
    {
        return $this->replacementIccid;
    }


}

