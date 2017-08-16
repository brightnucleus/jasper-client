<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class UpdateOrderShipmentInformationRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $JasperOrderID = null;

    /**
     * @var string
     */
    private $ExtOrderID = null;

    /**
     * @var \DateTime
     */
    private $ShippedDate = null;

    /**
     * @var OrderLine
     */
    private $OrderLine = null;

    /**
     * @return string
     */
    public function getJasperOrderID()
    {
        return $this->JasperOrderID;
    }

    /**
     * @return string
     */
    public function getExtOrderID()
    {
        return $this->ExtOrderID;
    }

    /**
     * @return \DateTime
     */
    public function getShippedDate()
    {
        return $this->ShippedDate;
    }

    /**
     * @return OrderLine
     */
    public function getOrderLine()
    {
        return $this->OrderLine;
    }


}

