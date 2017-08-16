<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class IsPasswordValidResponse extends JasperResponse
{

    /**
     * @var bool
     */
    private $valid = null;

    /**
     * @var string
     */
    private $reason = null;

    /**
     * @return bool
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }


}

