<?php

namespace BrightNucleus\JasperClient\SoapTypes\BillingClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetInvoiceResponse extends JasperResponse
{

    /**
     * @var int
     */
    private $accountId = null;

    /**
     * @var int
     */
    private $invoiceId = null;

    /**
     * @var string
     */
    private $currency = null;

    /**
     * @var \DateTime
     */
    private $invoiceDate = null;

    /**
     * @var \DateTime
     */
    private $dueDate = null;

    /**
     * @var \DateTime
     */
    private $cycleStartDate = null;

    /**
     * @var \DateTime
     */
    private $cycleEndDate = null;

    /**
     * @var int
     */
    private $totalTerminals = null;

    /**
     * @var float
     */
    private $dataVolume = null;

    /**
     * @var float
     */
    private $subscriptionCharge = null;

    /**
     * @var float
     */
    private $overageCharge = null;

    /**
     * @var float
     */
    private $totalCharge = null;

    /**
     * @var float
     */
    private $smsVolume = null;

    /**
     * @var float
     */
    private $smsCharge = null;

    /**
     * @var float
     */
    private $voiceVolume = null;

    /**
     * @var float
     */
    private $voiceCharge = null;

    /**
     * @var float
     */
    private $otherCharge = null;

    /**
     * @var int
     */
    private $totalEvents = null;

    /**
     * @var float
     */
    private $eventsCharge = null;

    /**
     * @var float
     */
    private $activationCharge = null;

    /**
     * @var float
     */
    private $discountApplied = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @return int
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @return \DateTime
     */
    public function getCycleStartDate()
    {
        return $this->cycleStartDate;
    }

    /**
     * @return \DateTime
     */
    public function getCycleEndDate()
    {
        return $this->cycleEndDate;
    }

    /**
     * @return int
     */
    public function getTotalTerminals()
    {
        return $this->totalTerminals;
    }

    /**
     * @return float
     */
    public function getDataVolume()
    {
        return $this->dataVolume;
    }

    /**
     * @return float
     */
    public function getSubscriptionCharge()
    {
        return $this->subscriptionCharge;
    }

    /**
     * @return float
     */
    public function getOverageCharge()
    {
        return $this->overageCharge;
    }

    /**
     * @return float
     */
    public function getTotalCharge()
    {
        return $this->totalCharge;
    }

    /**
     * @return float
     */
    public function getSmsVolume()
    {
        return $this->smsVolume;
    }

    /**
     * @return float
     */
    public function getSmsCharge()
    {
        return $this->smsCharge;
    }

    /**
     * @return float
     */
    public function getVoiceVolume()
    {
        return $this->voiceVolume;
    }

    /**
     * @return float
     */
    public function getVoiceCharge()
    {
        return $this->voiceCharge;
    }

    /**
     * @return float
     */
    public function getOtherCharge()
    {
        return $this->otherCharge;
    }

    /**
     * @return int
     */
    public function getTotalEvents()
    {
        return $this->totalEvents;
    }

    /**
     * @return float
     */
    public function getEventsCharge()
    {
        return $this->eventsCharge;
    }

    /**
     * @return float
     */
    public function getActivationCharge()
    {
        return $this->activationCharge;
    }

    /**
     * @return float
     */
    public function getDiscountApplied()
    {
        return $this->discountApplied;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

