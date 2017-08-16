<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetPeeredAccountsResponse extends JasperResponse
{

    /**
     * @var peeredAccountDetails
     */
    private $peeredAccountDetails = null;

    /**
     * @var string
     */
    private $errorCode = null;

    /**
     * @var string
     */
    private $errorDetails = null;

    /**
     * @return peeredAccountDetails
     */
    public function getPeeredAccountDetails()
    {
        return $this->peeredAccountDetails;
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @return string
     */
    public function getErrorDetails()
    {
        return $this->errorDetails;
    }


}

