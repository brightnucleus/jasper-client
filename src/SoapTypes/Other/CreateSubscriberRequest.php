<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class CreateSubscriberRequest extends JasperRequest
{

    /**
     * @var RequestKeyType
     */
    private $requestKey = null;

    /**
     * @var TargetStateType
     */
    private $targetState = null;

    /**
     * @var SubscriberIdentifierType
     */
    private $subscriberIdentifiers = null;

    /**
     * @var DeviceFeatureType
     */
    private $deviceFeatures = null;

    /**
     * @var ConsumerDetailType
     */
    private $consumerDetails = null;

    /**
     * @var ServiceDetailsType
     */
    private $serviceDetails = null;

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
     * @return TargetStateType
     */
    public function getTargetState()
    {
        return $this->targetState;
    }

    /**
     * @return SubscriberIdentifierType
     */
    public function getSubscriberIdentifiers()
    {
        return $this->subscriberIdentifiers;
    }

    /**
     * @return DeviceFeatureType
     */
    public function getDeviceFeatures()
    {
        return $this->deviceFeatures;
    }

    /**
     * @return ConsumerDetailType
     */
    public function getConsumerDetails()
    {
        return $this->consumerDetails;
    }

    /**
     * @return ServiceDetailsType
     */
    public function getServiceDetails()
    {
        return $this->serviceDetails;
    }

    /**
     * @return successMessageType
     */
    public function getSuccessSmsMsg()
    {
        return $this->successSmsMsg;
    }


}

