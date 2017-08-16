<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class ProcessGlobalSimTransferTerminationRequest extends JasperRequest
{

    /**
     * @var int
     */
    private $distributedSimTransferId = null;

    /**
     * @var string
     */
    private $transferStatus = null;

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
    public function getTransferStatus()
    {
        return $this->transferStatus;
    }


}

