<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class QuotaInfoType
{

    /**
     * @var string
     */
    private $policyName = null;

    /**
     * @var string
     */
    private $quotaName = null;

    /**
     * @var string
     */
    private $balance = null;

    /**
     * @var \DateTime
     */
    private $expiryDate = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return string
     */
    public function getPolicyName()
    {
        return $this->policyName;
    }

    /**
     * @return string
     */
    public function getQuotaName()
    {
        return $this->quotaName;
    }

    /**
     * @return string
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

