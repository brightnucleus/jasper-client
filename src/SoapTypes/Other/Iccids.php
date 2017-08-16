<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class Iccids
{

    /**
     * @var array
     */
    private $iccid = null;

    public function __construct($iccids)
    {
        $this->iccid = (array)$iccids;
    }

    public static function from($iccids)
    {
        if ($iccids instanceof self) {
            return $iccids;
        }

        return new self($iccids);
    }

    /**
     * @return array
     */
    public function getIccid()
    {
        return $this->iccid;
    }


}

