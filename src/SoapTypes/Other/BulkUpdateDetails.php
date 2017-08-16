<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

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

