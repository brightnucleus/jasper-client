<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class QuotaUsageInfoType
{

    /**
     * @var string
     */
    private $imsi = null;

    /**
     * @var string
     */
    private $accountName = null;

    /**
     * @var string
     */
    private $serviceName = null;

    /**
     * @var string
     */
    private $msisdn = null;

    /**
     * @var string
     */
    private $messageType = null;

    /**
     * @var string
     */
    private $quota = null;

    /**
     * @var string
     */
    private $quotaUsage = null;

    /**
     * @var string
     */
    private $quotaBalance = null;

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
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @return string
     */
    public function getServiceName()
    {
        return $this->serviceName;
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
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     * @return string
     */
    public function getQuota()
    {
        return $this->quota;
    }

    /**
     * @return string
     */
    public function getQuotaUsage()
    {
        return $this->quotaUsage;
    }

    /**
     * @return string
     */
    public function getQuotaBalance()
    {
        return $this->quotaBalance;
    }


}

