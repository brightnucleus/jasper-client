<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class LineResultType
{

    /**
     * @var string
     */
    private $IMSI = null;

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
    private $MSISDN = null;

    /**
     * @var int
     */
    private $RSP_ID = null;

    /**
     * @var SteeringType
     */
    private $STEERING_TYPE = null;

    /**
     * @var string
     */
    private $CARD_TYPE = null;

    /**
     * @return string
     */
    public function getIMSI()
    {
        return $this->IMSI;
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
    public function getMSISDN()
    {
        return $this->MSISDN;
    }

    /**
     * @return int
     */
    public function getRSP_ID()
    {
        return $this->RSP_ID;
    }

    /**
     * @return SteeringType
     */
    public function getSTEERING_TYPE()
    {
        return $this->STEERING_TYPE;
    }

    /**
     * @return string
     */
    public function getCARD_TYPE()
    {
        return $this->CARD_TYPE;
    }


}

