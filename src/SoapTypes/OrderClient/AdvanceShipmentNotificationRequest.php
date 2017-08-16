<?php

namespace BrightNucleus\JasperClient\SoapTypes\OrderClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class AdvanceShipmentNotificationRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $orderId = null;

    /**
     * @var statusUp\DateTimeNote
     */
    private $statusUpdateNote = null;

    /**
     * @var orderLineItems
     */
    private $orderLineItems = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @return statusUp\DateTimeNote
     */
    public function getStatusUpdateNote()
    {
        return $this->statusUpdateNote;
    }

    /**
     * @return orderLineItems
     */
    public function getOrderLineItems()
    {
        return $this->orderLineItems;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

