<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class ManageSubscriberProfileResponse extends JasperResponse
{

    /**
     * @var iccids
     */
    private $iccids = null;

    /**
     * @return iccids
     */
    public function getIccids()
    {
        return $this->iccids;
    }


}

