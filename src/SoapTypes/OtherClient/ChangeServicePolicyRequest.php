<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class ChangeServicePolicyRequest extends JasperRequest
{

    /**
     * @var RequestKeyType
     */
    private $requestKey = null;

    /**
     * @var string
     */
    private $bandwidthruleid = null;

    /**
     * @var string
     */
    private $roamBandwidthRuleId = null;

    /**
     * @var string
     */
    private $reason = null;

    /**
     * @var successMessageType
     */
    private $successSmsMsg = null;

    /**
     * @return RequestKeyType
     */
    public function getRequestKey()
    {
        return $this->requestKey;
    }

    /**
     * @return string
     */
    public function getBandwidthruleid()
    {
        return $this->bandwidthruleid;
    }

    /**
     * @return string
     */
    public function getRoamBandwidthRuleId()
    {
        return $this->roamBandwidthRuleId;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @return successMessageType
     */
    public function getSuccessSmsMsg()
    {
        return $this->successSmsMsg;
    }


}

