<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class BulkUpdateDetails
{

    /**
     * @var BulkUp\DateTimeType
     */
    private $bulkUpdateDetail = null;

    /**
     * @return BulkUp\DateTimeType
     */
    public function getBulkUpdateDetail()
    {
        return $this->bulkUpdateDetail;
    }


}

