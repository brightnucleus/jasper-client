<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class TransferSimsToAccountCallbackResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $apiCallbackNotificationId = null;

    /**
     * @var string
     */
    private $sourceApi = null;

    /**
     * @var \DateTime
     */
    private $requestDate = null;

    /**
     * @var simTransferToAccountStatusList
     */
    private $simTransferToAccountStatusList = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return string
     */
    public function getApiCallbackNotificationId()
    {
        return $this->apiCallbackNotificationId;
    }

    /**
     * @return string
     */
    public function getSourceApi()
    {
        return $this->sourceApi;
    }

    /**
     * @return \DateTime
     */
    public function getRequestDate()
    {
        return $this->requestDate;
    }

    /**
     * @return simTransferToAccountStatusList
     */
    public function getSimTransferToAccountStatusList()
    {
        return $this->simTransferToAccountStatusList;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

