<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

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

