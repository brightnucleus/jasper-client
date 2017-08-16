<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class RoamingSteeringProfileInfoResponseType
{

    /**
     * @var int
     */
    private $RSP_ID = null;

    /**
     * @var int
     */
    private $RESULT = null;

    /**
     * @var string
     */
    private $DESCRIPTION = null;

    /**
     * @var string
     */
    private $NETWORKS = null;

    /**
     * @return int
     */
    public function getRSP_ID()
    {
        return $this->RSP_ID;
    }

    /**
     * @return int
     */
    public function getRESULT()
    {
        return $this->RESULT;
    }

    /**
     * @return string
     */
    public function getDESCRIPTION()
    {
        return $this->DESCRIPTION;
    }

    /**
     * @return string
     */
    public function getNETWORKS()
    {
        return $this->NETWORKS;
    }


}

