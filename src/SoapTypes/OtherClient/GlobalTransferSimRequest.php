<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GlobalTransferSimRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $primaryICCID = null;

    /**
     * @var string
     */
    private $primaryIMSI = null;

    /**
     * @var string
     */
    private $primaryMSISDN = null;

    /**
     * @var string
     */
    private $primaryOperatorName = null;

    /**
     * @var string
     */
    private $primaryAcctName = null;

    /**
     * @var string
     */
    private $primarySimProfileId = null;

    /**
     * @var string
     */
    private $primarySimState = null;

    /**
     * @var string
     */
    private $primaryGlobalSimType = null;

    /**
     * @var string
     */
    private $targetOperatorName = null;

    /**
     * @var string
     */
    private $targetAccountName = null;

    /**
     * @var string
     */
    private $targetSimProfileId = null;

    /**
     * @var GlobalSimTransferType
     */
    private $transferType = null;

    /**
     * @var anyURI
     */
    private $callbackNotificationURL = null;

    /**
     * @var bool
     */
    private $isSpecialTargetMSISDNAssignment = null;

    /**
     * @var GlobalSimOtaAlgoType
     */
    private $otaAlgorithmType = null;

    /**
     * @var string
     */
    private $euiccID = null;

    /**
     * @return string
     */
    public function getPrimaryICCID()
    {
        return $this->primaryICCID;
    }

    /**
     * @return string
     */
    public function getPrimaryIMSI()
    {
        return $this->primaryIMSI;
    }

    /**
     * @return string
     */
    public function getPrimaryMSISDN()
    {
        return $this->primaryMSISDN;
    }

    /**
     * @return string
     */
    public function getPrimaryOperatorName()
    {
        return $this->primaryOperatorName;
    }

    /**
     * @return string
     */
    public function getPrimaryAcctName()
    {
        return $this->primaryAcctName;
    }

    /**
     * @return string
     */
    public function getPrimarySimProfileId()
    {
        return $this->primarySimProfileId;
    }

    /**
     * @return string
     */
    public function getPrimarySimState()
    {
        return $this->primarySimState;
    }

    /**
     * @return string
     */
    public function getPrimaryGlobalSimType()
    {
        return $this->primaryGlobalSimType;
    }

    /**
     * @return string
     */
    public function getTargetOperatorName()
    {
        return $this->targetOperatorName;
    }

    /**
     * @return string
     */
    public function getTargetAccountName()
    {
        return $this->targetAccountName;
    }

    /**
     * @return string
     */
    public function getTargetSimProfileId()
    {
        return $this->targetSimProfileId;
    }

    /**
     * @return GlobalSimTransferType
     */
    public function getTransferType()
    {
        return $this->transferType;
    }

    /**
     * @return anyURI
     */
    public function getCallbackNotificationURL()
    {
        return $this->callbackNotificationURL;
    }

    /**
     * @return bool
     */
    public function getIsSpecialTargetMSISDNAssignment()
    {
        return $this->isSpecialTargetMSISDNAssignment;
    }

    /**
     * @return GlobalSimOtaAlgoType
     */
    public function getOtaAlgorithmType()
    {
        return $this->otaAlgorithmType;
    }

    /**
     * @return string
     */
    public function getEuiccID()
    {
        return $this->euiccID;
    }


}

