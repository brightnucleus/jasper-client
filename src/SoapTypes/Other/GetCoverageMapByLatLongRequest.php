<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetCoverageMapByLatLongRequest extends JasperRequest
{

    /**
     * @var float
     */
    private $x = null;

    /**
     * @var float
     */
    private $y = null;

    /**
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }


}

