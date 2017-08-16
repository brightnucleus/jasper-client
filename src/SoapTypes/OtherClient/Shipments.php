<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class Shipments
{

    /**
     * @var shipmentTrackingType
     */
    private $shipment = null;

    /**
     * @return shipmentTrackingType
     */
    public function getShipment()
    {
        return $this->shipment;
    }


}

