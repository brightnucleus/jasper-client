<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class NacIdType
{

    /**
     * @var int
     */
    private $nacId = null;

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @return int
     */
    public function getNacId()
    {
        return $this->nacId;
    }

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }


}

