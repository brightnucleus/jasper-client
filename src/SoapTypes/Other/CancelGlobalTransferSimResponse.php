<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class CancelGlobalTransferSimResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $primaryIccid = null;

    /**
     * @var string
     */
    private $transferId = null;

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
     * @return string
     */
    public function getTransferId()
    {
        return $this->transferId;
    }

    /**
     * @return GlobalSimTransferStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }


}

