<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class IsNewUsernameValidResponse extends JasperResponse
{

    /**
     * @var bool
     */
    private $valid = null;

    /**
     * @return bool
     */
    public function getValid()
    {
        return $this->valid;
    }


}

