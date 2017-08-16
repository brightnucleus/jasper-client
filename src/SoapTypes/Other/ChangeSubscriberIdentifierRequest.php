<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class ChangeSubscriberIdentifierRequest extends JasperRequest
{

    /**
     * @var ChangeIdentifierKeyType
     */
    private $changeIdentifierKey = null;

    /**
     * @var ChangeSubscriberIdentifierType
     */
    private $oldSubscriberIdentifiers = null;

    /**
     * @var ChangeSubscriberIdentifierType
     */
    private $newSubscriberIdentifiers = null;

    /**
     * @var DeviceFeatureType
     */
    private $oldDeviceFeatures = null;

    /**
     * @var DeviceFeatureType
     */
    private $newDeviceFeatures = null;

    /**
     * @var string
     */
    private $reason = null;

    /**
     * @var successMessageType
     */
    private $successSmsMsg = null;

    /**
     * @return ChangeIdentifierKeyType
     */
    public function getChangeIdentifierKey()
    {
        return $this->changeIdentifierKey;
    }

    /**
     * @return ChangeSubscriberIdentifierType
     */
    public function getOldSubscriberIdentifiers()
    {
        return $this->oldSubscriberIdentifiers;
    }

    /**
     * @return ChangeSubscriberIdentifierType
     */
    public function getNewSubscriberIdentifiers()
    {
        return $this->newSubscriberIdentifiers;
    }

    /**
     * @return DeviceFeatureType
     */
    public function getOldDeviceFeatures()
    {
        return $this->oldDeviceFeatures;
    }

    /**
     * @return DeviceFeatureType
     */
    public function getNewDeviceFeatures()
    {
        return $this->newDeviceFeatures;
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

