<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class SimStatus
{

    /**
     * @var string
     */
    private $SIM_Status = null;

    /**
     * @var string
     */
    private $ICCID = null;

    /**
     * @var string
     */
    private $Error_Code = null;

    /**
     * @return string
     */
    public function getSIM_Status()
    {
        return $this->SIM_Status;
    }

    /**
     * @return string
     */
    public function getICCID()
    {
        return $this->ICCID;
    }

    /**
     * @return string
     */
    public function getError_Code()
    {
        return $this->Error_Code;
    }


}

