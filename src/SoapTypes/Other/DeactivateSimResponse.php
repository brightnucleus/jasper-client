<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class DeactivateSimResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $Status_Code = null;

    /**
     * @var string
     */
    private $Batch_Identifier = null;

    /**
     * @return string
     */
    public function getStatus_Code()
    {
        return $this->Status_Code;
    }

    /**
     * @return string
     */
    public function getBatch_Identifier()
    {
        return $this->Batch_Identifier;
    }


}

