<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class ImeiWhitelistInfoType
{

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
    private $imei = null;

    /**
     * @var string
     */
    private $whitelistAction = null;

    /**
     * @var \DateTime
     */
    private $dateAction = null;

    /**
     * @var string
     */
    private $simState = null;

    /**
     * @var string
     */
    private $endConsumerId = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

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
    public function getImei()
    {
        return $this->imei;
    }

    /**
     * @return string
     */
    public function getWhitelistAction()
    {
        return $this->whitelistAction;
    }

    /**
     * @return \DateTime
     */
    public function getDateAction()
    {
        return $this->dateAction;
    }

    /**
     * @return string
     */
    public function getSimState()
    {
        return $this->simState;
    }

    /**
     * @return string
     */
    public function getEndConsumerId()
    {
        return $this->endConsumerId;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

