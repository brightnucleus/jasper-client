<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class InterSPCreateTargetSimResponse extends JasperResponse
{

    /**
     * @var int
     */
    private $distributedSimTransferId = null;

    /**
     * @var GetOrCreateSimFromVirtualSubscriptionStatus
     */
    private $status = null;

    /**
     * @var string
     */
    private $targetIccid = null;

    /**
     * @return int
     */
    public function getDistributedSimTransferId()
    {
        return $this->distributedSimTransferId;
    }

    /**
     * @return GetOrCreateSimFromVirtualSubscriptionStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getTargetIccid()
    {
        return $this->targetIccid;
    }


}

