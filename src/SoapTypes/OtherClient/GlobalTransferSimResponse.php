<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GlobalTransferSimResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $transferId = null;

    /**
     * @var string
     */
    private $primaryICCID = null;

    /**
     * @return string
     */
    public function getTransferId()
    {
        return $this->transferId;
    }

    /**
     * @return string
     */
    public function getPrimaryICCID()
    {
        return $this->primaryICCID;
    }


}

