<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class SubscriberPolicyType
{

    /**
     * @var string
     */
    private $apnName = null;

    /**
     * @var int
     */
    private $streamId = null;

    /**
     * @var string
     */
    private $policyAction = null;

    /**
     * @return string
     */
    public function getApnName()
    {
        return $this->apnName;
    }

    /**
     * @return int
     */
    public function getStreamId()
    {
        return $this->streamId;
    }

    /**
     * @return string
     */
    public function getPolicyAction()
    {
        return $this->policyAction;
    }


}

