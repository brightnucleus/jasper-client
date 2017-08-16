<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class AccountTransfer
{

    /**
     * @var string
     */
    private $authtoken = null;

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var int
     */
    private $simid = null;

    /**
     * @var string
     */
    private $sourceuser = null;

    /**
     * @var string
     */
    private $globaluser = null;

    /**
     * @var string
     */
    private $targetaccount = null;

    /**
     * @var int
     */
    private $requestoraccountid = null;

    /**
     * @var string
     */
    private $messageid = null;

    /**
     * @var string
     */
    private $sourceaccount = null;

    /**
     * @var string
     */
    private $sourceoperator = null;

    /**
     * @var string
     */
    private $targetoperator = null;

    /**
     * @var string
     */
    private $globalaccount = null;

    /**
     * @return string
     */
    public function getAuthtoken()
    {
        return $this->authtoken;
    }

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }

    /**
     * @return int
     */
    public function getSimid()
    {
        return $this->simid;
    }

    /**
     * @return string
     */
    public function getSourceuser()
    {
        return $this->sourceuser;
    }

    /**
     * @return string
     */
    public function getGlobaluser()
    {
        return $this->globaluser;
    }

    /**
     * @return string
     */
    public function getTargetaccount()
    {
        return $this->targetaccount;
    }

    /**
     * @return int
     */
    public function getRequestoraccountid()
    {
        return $this->requestoraccountid;
    }

    /**
     * @return string
     */
    public function getMessageid()
    {
        return $this->messageid;
    }

    /**
     * @return string
     */
    public function getSourceaccount()
    {
        return $this->sourceaccount;
    }

    /**
     * @return string
     */
    public function getSourceoperator()
    {
        return $this->sourceoperator;
    }

    /**
     * @return string
     */
    public function getTargetoperator()
    {
        return $this->targetoperator;
    }

    /**
     * @return string
     */
    public function getGlobalaccount()
    {
        return $this->globalaccount;
    }


}

