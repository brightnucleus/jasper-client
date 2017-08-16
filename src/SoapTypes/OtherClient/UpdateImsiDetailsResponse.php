<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class UpdateImsiDetailsResponse extends JasperResponse
{

    /**
     * @var Up\DateTimeImsiDetailsStatus
     */
    private $UpdateImsiDetailsStatus = null;

    /**
     * @return Up\DateTimeImsiDetailsStatus
     */
    public function getUpdateImsiDetailsStatus()
    {
        return $this->UpdateImsiDetailsStatus;
    }


}

