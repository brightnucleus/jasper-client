<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class RogersSIMActivationSIMResponseType
{

    /**
     * @var string
     */
    private $fileName = null;

    /**
     * @var int
     */
    private $orderId = null;

    /**
     * @var int
     */
    private $accountId = null;

    /**
     * @var int
     */
    private $batchUpdateId = null;

    /**
     * @var int
     */
    private $totalSimQuantity = null;

    /**
     * @var int
     */
    private $simTransferSuccessQuantity = null;

    /**
     * @var \DateTime
     */
    private $eventTimeStamp = null;

    /**
     * @var RogersSIMActivationFailureList
     */
    private $RogersSIMActivationFailureList = null;

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @return int
     */
    public function getBatchUpdateId()
    {
        return $this->batchUpdateId;
    }

    /**
     * @return int
     */
    public function getTotalSimQuantity()
    {
        return $this->totalSimQuantity;
    }

    /**
     * @return int
     */
    public function getSimTransferSuccessQuantity()
    {
        return $this->simTransferSuccessQuantity;
    }

    /**
     * @return \DateTime
     */
    public function getEventTimeStamp()
    {
        return $this->eventTimeStamp;
    }

    /**
     * @return RogersSIMActivationFailureList
     */
    public function getRogersSIMActivationFailureList()
    {
        return $this->RogersSIMActivationFailureList;
    }


}

