<?php

namespace BrightNucleus\JasperClient\SoapTypes\OrderClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetBulkUpdateStatusRequest extends JasperRequest
{

    /**
     * @var int
     */
    private $orderId = null;

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }


}

