<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class CancelSimMigrationRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $requestId = null;

    /**
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }


}

