<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class BulkUpdateType
{

    /**
     * @var string
     */
    private $bulkUpdateId = null;

    /**
     * @var string
     */
    private $bulkUpdateStatus = null;

    /**
     * @return string
     */
    public function getBulkUpdateId()
    {
        return $this->bulkUpdateId;
    }

    /**
     * @return string
     */
    public function getBulkUpdateStatus()
    {
        return $this->bulkUpdateStatus;
    }


}

