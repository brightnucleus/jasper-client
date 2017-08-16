<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetSimMigrationStatusRequest extends JasperRequest
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

