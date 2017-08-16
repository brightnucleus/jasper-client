<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class OrderLine
{

    /**
     * @var int
     */
    private $OrderLineID = null;

    /**
     * @var string
     */
    private $ItemID = null;

    /**
     * @var int
     */
    private $ShipQty = null;

    /**
     * @var anyURI
     */
    private $TrackingURL = null;

    /**
     * @var string
     */
    private $TrackingNumber = null;

    /**
     * @var string
     */
    private $SerialNumber = null;

    /**
     * @return int
     */
    public function getOrderLineID()
    {
        return $this->OrderLineID;
    }

    /**
     * @return string
     */
    public function getItemID()
    {
        return $this->ItemID;
    }

    /**
     * @return int
     */
    public function getShipQty()
    {
        return $this->ShipQty;
    }

    /**
     * @return anyURI
     */
    public function getTrackingURL()
    {
        return $this->TrackingURL;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->SerialNumber;
    }


}

