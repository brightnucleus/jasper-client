<?php

namespace BrightNucleus\JasperClient\SoapTypes\GlobalSimTransferClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class CancelGlobalSimTransferResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $primaryIccid = null;

    /**
     * @var GlobalSimTransferStatusType
     */
    private $status = null;

    /**
     * @return string
     */
    public function getPrimaryIccid()
    {
        return $this->primaryIccid;
    }

    /**
     * @return GlobalSimTransferStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }


}

