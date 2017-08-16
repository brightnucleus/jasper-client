<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class UpdateImsiDetailsRequest extends JasperRequest
{

    /**
     * @var Up\DateTimeImsiDetails
     */
    private $UpdateImsiDetails = null;

    /**
     * @return Up\DateTimeImsiDetails
     */
    public function getUpdateImsiDetails()
    {
        return $this->UpdateImsiDetails;
    }


}

