<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class UpdateSubscriberPolicyRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $imsi = null;

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var \DateTime
     */
    private $effectiveDate = null;

    /**
     * @var bool
     */
    private $inlineProcess = null;

    /**
     * @var string
     */
    private $notificationURL = null;

    /**
     * @var subscriberPolicies
     */
    private $subscriberPolicies = null;

    /**
     * @var additionalPolicies
     */
    private $additionalPolicies = null;

    /**
     * @return string
     */
    public function getImsi()
    {
        return $this->imsi;
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
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * @return bool
     */
    public function getInlineProcess()
    {
        return $this->inlineProcess;
    }

    /**
     * @return string
     */
    public function getNotificationURL()
    {
        return $this->notificationURL;
    }

    /**
     * @return subscriberPolicies
     */
    public function getSubscriberPolicies()
    {
        return $this->subscriberPolicies;
    }

    /**
     * @return additionalPolicies
     */
    public function getAdditionalPolicies()
    {
        return $this->additionalPolicies;
    }


}

