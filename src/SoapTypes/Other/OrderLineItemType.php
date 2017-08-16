<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class OrderLineItemType
{

    /**
     * @var shipments
     */
    private $shipments = null;

    /**
     * @return shipments
     */
    public function getShipments()
    {
        return $this->shipments;
    }


}

