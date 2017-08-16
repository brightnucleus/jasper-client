<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class SmsMoReceivedInfoType
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $accountName = null;

    /**
     * @var string
     */
    private $customerName = null;

    /**
     * @var string
     */
    private $msisdn = null;

    /**
     * @var string
     */
    private $messageContent = null;

    /**
     * @var int
     */
    private $smppDataCoding = null;

    /**
     * @var string
     */
    private $shortCode = null;

    /**
     * @var \DateTime
     */
    private $receivedTime = null;

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
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @return string
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }

    /**
     * @return string
     */
    public function getMessageContent()
    {
        return $this->messageContent;
    }

    /**
     * @return int
     */
    public function getSmppDataCoding()
    {
        return $this->smppDataCoding;
    }

    /**
     * @return string
     */
    public function getShortCode()
    {
        return $this->shortCode;
    }

    /**
     * @return \DateTime
     */
    public function getReceivedTime()
    {
        return $this->receivedTime;
    }


}

