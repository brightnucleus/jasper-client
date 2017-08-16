<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class SimImeiMismatchInfoType
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $networkImei = null;

    /**
     * @var string
     */
    private $customerImei = null;

    /**
     * @var \DateTime
     */
    private $dateChanged = null;

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
    public function getNetworkImei()
    {
        return $this->networkImei;
    }

    /**
     * @return string
     */
    public function getCustomerImei()
    {
        return $this->customerImei;
    }

    /**
     * @return \DateTime
     */
    public function getDateChanged()
    {
        return $this->dateChanged;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

