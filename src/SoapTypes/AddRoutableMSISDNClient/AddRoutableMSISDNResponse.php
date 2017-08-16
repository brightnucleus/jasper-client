<?php

namespace BrightNucleus\JasperClient\SoapTypes\AddRoutableMSISDNClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class AddRoutableMSISDNResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $code = null;

    /**
     * @var string
     */
    private $description = null;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }


}

