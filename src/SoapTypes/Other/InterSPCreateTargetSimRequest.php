<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class InterSPCreateTargetSimRequest extends JasperRequest
{

    /**
     * @var int
     */
    private $distributedSimTransferId = null;

    /**
     * @var string
     */
    private $sourceIccid = null;

    /**
     * @var string
     */
    private $targetOperator = null;

    /**
     * @var string
     */
    private $targetAccount = null;

    /**
     * @var string
     */
    private $externalSimProfileId = null;

    /**
     * @var SimInfo
     */
    private $simInfo = null;

    /**
     * @var SimAuxFieldInfo
     */
    private $simAuxFieldInfo = null;

    /**
     * @var ImsiInfo
     */
    private $imsiInfo = null;

    /**
     * @var RawSimInfo
     */
    private $rawSimInfo = null;

    /**
     * @return int
     */
    public function getDistributedSimTransferId()
    {
        return $this->distributedSimTransferId;
    }

    /**
     * @return string
     */
    public function getSourceIccid()
    {
        return $this->sourceIccid;
    }

    /**
     * @return string
     */
    public function getTargetOperator()
    {
        return $this->targetOperator;
    }

    /**
     * @return string
     */
    public function getTargetAccount()
    {
        return $this->targetAccount;
    }

    /**
     * @return string
     */
    public function getExternalSimProfileId()
    {
        return $this->externalSimProfileId;
    }

    /**
     * @return SimInfo
     */
    public function getSimInfo()
    {
        return $this->simInfo;
    }

    /**
     * @return SimAuxFieldInfo
     */
    public function getSimAuxFieldInfo()
    {
        return $this->simAuxFieldInfo;
    }

    /**
     * @return ImsiInfo
     */
    public function getImsiInfo()
    {
        return $this->imsiInfo;
    }

    /**
     * @return RawSimInfo
     */
    public function getRawSimInfo()
    {
        return $this->rawSimInfo;
    }


}

