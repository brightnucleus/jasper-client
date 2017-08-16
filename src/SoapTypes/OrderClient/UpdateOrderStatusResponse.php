<?php

namespace BrightNucleus\JasperClient\SoapTypes\OrderClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class UpdateOrderStatusResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $status = null;

    /**
     * @var string
     */
    private $statusReason = null;

    /**
     * @var string
     */
    private $currentOrderStatus = null;

    /**
     * @var string
     */
    private $requestedTargetOrderStatus = null;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * @return string
     */
    public function getCurrentOrderStatus()
    {
        return $this->currentOrderStatus;
    }

    /**
     * @return string
     */
    public function getRequestedTargetOrderStatus()
    {
        return $this->requestedTargetOrderStatus;
    }


}

