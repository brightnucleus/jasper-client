<?php

namespace BrightNucleus\JasperClient\SoapTypes\OrderClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class UpdateOrderStatusRequest extends JasperRequest
{

    /**
     * @var int
     */
    private $orderId = null;

    /**
     * @var string
     */
    private $orderStatus = null;

    /**
     * @var statusUp\DateTimeNote
     */
    private $statusUpdateNote = null;

    /**
     * @var shippingTrackingNumber
     */
    private $shippingTrackingNumber = null;

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @return statusUp\DateTimeNote
     */
    public function getStatusUpdateNote()
    {
        return $this->statusUpdateNote;
    }

    /**
     * @return shippingTrackingNumber
     */
    public function getShippingTrackingNumber()
    {
        return $this->shippingTrackingNumber;
    }


}

