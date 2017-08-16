<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class AssociateSrcSimWithTargetSimResponse extends JasperResponse
{

    /**
     * @var int
     */
    private $globalSimTransferId = null;

    /**
     * @var int
     */
    private $subcriptionMappingId = null;

    /**
     * @return int
     */
    public function getGlobalSimTransferId()
    {
        return $this->globalSimTransferId;
    }

    /**
     * @return int
     */
    public function getSubcriptionMappingId()
    {
        return $this->subcriptionMappingId;
    }


}

