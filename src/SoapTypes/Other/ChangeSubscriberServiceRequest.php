<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class ChangeSubscriberServiceRequest extends JasperRequest
{

    /**
     * @var RequestKeyType
     */
    private $requestKey = null;

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

