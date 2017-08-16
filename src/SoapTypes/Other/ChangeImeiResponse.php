<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class ChangeImeiResponse extends JasperResponse
{

    /**
     * @var ResponseStatus
     */
    private $responseStatus = null;

    /**
     * @var ResponseError
     */
    private $error = null;

    /**
     * @return ResponseStatus
     */
    public function getResponseStatus()
    {
        return $this->responseStatus;
    }

    /**
     * @return ResponseError
     */
    public function getError()
    {
        return $this->error;
    }


}

