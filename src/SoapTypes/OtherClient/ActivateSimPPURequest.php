<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class ActivateSimPPURequest extends JasperRequest
{

    /**
     * @var string
     */
    private $strSIM = null;

    /**
     * @var string
     */
    private $strAction = null;

    /**
     * @var string
     */
    private $strDate = null;

    /**
     * @var string
     */
    private $strCustPrefix = null;

    /**
     * @var string
     */
    private $strCust_Field1 = null;

    /**
     * @var string
     */
    private $strCust_Field2 = null;

    /**
     * @var string
     */
    private $strCust_Field3 = null;

    /**
     * @var string
     */
    private $strCust_Field4 = null;

    /**
     * @var string
     */
    private $strCust_Field5 = null;

    /**
     * @var string
     */
    private $strProfileName = null;

    /**
     * @var int
     */
    private $iPriority = null;

    /**
     * @var string
     */
    private $strPPU = null;

    /**
     * @return string
     */
    public function getStrSIM()
    {
        return $this->strSIM;
    }

    /**
     * @return string
     */
    public function getStrAction()
    {
        return $this->strAction;
    }

    /**
     * @return string
     */
    public function getStrDate()
    {
        return $this->strDate;
    }

    /**
     * @return string
     */
    public function getStrCustPrefix()
    {
        return $this->strCustPrefix;
    }

    /**
     * @return string
     */
    public function getStrCust_Field1()
    {
        return $this->strCust_Field1;
    }

    /**
     * @return string
     */
    public function getStrCust_Field2()
    {
        return $this->strCust_Field2;
    }

    /**
     * @return string
     */
    public function getStrCust_Field3()
    {
        return $this->strCust_Field3;
    }

    /**
     * @return string
     */
    public function getStrCust_Field4()
    {
        return $this->strCust_Field4;
    }

    /**
     * @return string
     */
    public function getStrCust_Field5()
    {
        return $this->strCust_Field5;
    }

    /**
     * @return string
     */
    public function getStrProfileName()
    {
        return $this->strProfileName;
    }

    /**
     * @return int
     */
    public function getIPriority()
    {
        return $this->iPriority;
    }

    /**
     * @return string
     */
    public function getStrPPU()
    {
        return $this->strPPU;
    }


}

