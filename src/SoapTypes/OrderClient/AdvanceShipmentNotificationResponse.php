<?php

namespace BrightNucleus\JasperClient\SoapTypes\OrderClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class AdvanceShipmentNotificationResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $status = null;

    /**
     * @var string
     */
    private $bulkUpdateID = null;

    /**
     * @var string
     */
    private $statusReason = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

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
    public function getBulkUpdateID()
    {
        return $this->bulkUpdateID;
    }

    /**
     * @return string
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

