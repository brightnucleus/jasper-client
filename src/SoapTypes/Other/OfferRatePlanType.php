<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class OfferRatePlanType
{

    /**
     * @var int
     */
    private $ratePlanId = null;

    /**
     * @var string
     */
    private $offerRatePlanDesc = null;

    /**
     * @var float
     */
    private $price = null;

    /**
     * @var float
     */
    private $dataLimitMB = null;

    /**
     * @var int
     */
    private $termLength = null;

    /**
     * @var string
     */
    private $termUnit = null;

    /**
     * @var bool
     */
    private $combineSms = null;

    /**
     * @var int
     */
    private $smsMoLimitMessages = null;

    /**
     * @var int
     */
    private $smsMtLimitMessages = null;

    /**
     * @var int
     */
    private $voiceLimitSeconds = null;

    /**
     * @var string
     */
    private $message = null;

    /**
     * @var string
     */
    private $notes = null;

    /**
     * @var \DateTime
     */
    private $dateModified = null;

    /**
     * @return int
     */
    public function getRatePlanId()
    {
        return $this->ratePlanId;
    }

    /**
     * @return string
     */
    public function getOfferRatePlanDesc()
    {
        return $this->offerRatePlanDesc;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return float
     */
    public function getDataLimitMB()
    {
        return $this->dataLimitMB;
    }

    /**
     * @return int
     */
    public function getTermLength()
    {
        return $this->termLength;
    }

    /**
     * @return string
     */
    public function getTermUnit()
    {
        return $this->termUnit;
    }

    /**
     * @return bool
     */
    public function getCombineSms()
    {
        return $this->combineSms;
    }

    /**
     * @return int
     */
    public function getSmsMoLimitMessages()
    {
        return $this->smsMoLimitMessages;
    }

    /**
     * @return int
     */
    public function getSmsMtLimitMessages()
    {
        return $this->smsMtLimitMessages;
    }

    /**
     * @return int
     */
    public function getVoiceLimitSeconds()
    {
        return $this->voiceLimitSeconds;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }


}

