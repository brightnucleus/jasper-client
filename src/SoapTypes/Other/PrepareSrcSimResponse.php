<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class PrepareSrcSimResponse extends JasperResponse
{

    /**
     * @var int
     */
    private $globalSimTransferId = null;

    /**
     * @var string
     */
    private $sourceIccid = null;

    /**
     * @var string
     */
    private $previousSourceSimState = null;

    /**
     * @var string
     */
    private $sourceSimState = null;

    /**
     * @var string
     */
    private $sourceSimRatePlan = null;

    /**
     * @var string
     */
    private $sourceSimCommPlan = null;

    /**
     * @var string
     */
    private $pin1 = null;

    /**
     * @var string
     */
    private $puk1 = null;

    /**
     * @var string
     */
    private $pin2 = null;

    /**
     * @var string
     */
    private $puk2 = null;

    /**
     * @var string
     */
    private $adm1 = null;

    /**
     * @var string
     */
    private $adm2 = null;

    /**
     * @var string
     */
    private $adm3 = null;

    /**
     * @var string
     */
    private $adm4 = null;

    /**
     * @var string
     */
    private $acc = null;

    /**
     * @return int
     */
    public function getGlobalSimTransferId()
    {
        return $this->globalSimTransferId;
    }

    /**
     * @return string
     */
    public function getSourceIccid()
    {
        return $this->sourceIccid;
    }

    /**
     * @return string
     */
    public function getPreviousSourceSimState()
    {
        return $this->previousSourceSimState;
    }

    /**
     * @return string
     */
    public function getSourceSimState()
    {
        return $this->sourceSimState;
    }

    /**
     * @return string
     */
    public function getSourceSimRatePlan()
    {
        return $this->sourceSimRatePlan;
    }

    /**
     * @return string
     */
    public function getSourceSimCommPlan()
    {
        return $this->sourceSimCommPlan;
    }

    /**
     * @return string
     */
    public function getPin1()
    {
        return $this->pin1;
    }

    /**
     * @return string
     */
    public function getPuk1()
    {
        return $this->puk1;
    }

    /**
     * @return string
     */
    public function getPin2()
    {
        return $this->pin2;
    }

    /**
     * @return string
     */
    public function getPuk2()
    {
        return $this->puk2;
    }

    /**
     * @return string
     */
    public function getAdm1()
    {
        return $this->adm1;
    }

    /**
     * @return string
     */
    public function getAdm2()
    {
        return $this->adm2;
    }

    /**
     * @return string
     */
    public function getAdm3()
    {
        return $this->adm3;
    }

    /**
     * @return string
     */
    public function getAdm4()
    {
        return $this->adm4;
    }

    /**
     * @return string
     */
    public function getAcc()
    {
        return $this->acc;
    }


}

