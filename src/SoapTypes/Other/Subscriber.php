<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class Subscriber
{

    /**
     * @var string
     */
    private $acctName = null;

    /**
     * @var string
     */
    private $operatorAccountId = null;

    /**
     * @var string
     */
    private $taxId = null;

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $imsi = null;

    /**
     * @var string
     */
    private $msisdn = null;

    /**
     * @var \DateTime
     */
    private $startDate = null;

    /**
     * @var \DateTime
     */
    private $endDate = null;

    /**
     * @return string
     */
    public function getAcctName()
    {
        return $this->acctName;
    }

    /**
     * @return string
     */
    public function getOperatorAccountId()
    {
        return $this->operatorAccountId;
    }

    /**
     * @return string
     */
    public function getTaxId()
    {
        return $this->taxId;
    }

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
    public function getImsi()
    {
        return $this->imsi;
    }

    /**
     * @return string
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }


}

