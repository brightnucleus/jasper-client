<?php

namespace BrightNucleus\JasperClient\SoapTypes\OrderClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetBulkUpdateStatusResponse extends JasperResponse
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
     * @var int
     */
    private $orderId = null;

    /**
     * @var bulkUp\DateTimeDetails
     */
    private $bulkUpdateDetails = null;

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
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @return bulkUp\DateTimeDetails
     */
    public function getBulkUpdateDetails()
    {
        return $this->bulkUpdateDetails;
    }


}

